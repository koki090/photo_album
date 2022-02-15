<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AlbumRequest;
use App\Http\Requests\PushPhotoRequest;
use App\User;
use App\Album;
use App\Photo;
use App\Like;

class AlbumController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth')
            ->except(['home']);
    }
    
    public function home(){
        $albums = Album::where('release', 1)->inRandomOrder()->get();
        return view('albums.home', [
            'title' => 'Photo_album',
            'albums' => $albums]);
    }
    
    public function index(Request $request){
        $search_albums = Album::where('release', 1)->inRandomOrder();
        $range = $request->range;
        $search_words = '';
        if(isset($request->search_word)){
            $search_words = str_replace("　", " ", $request->search_word);
            $search_words = explode(" ", $search_words);
        };
        if(empty($search_words) !== true){
            if($range === 'comment'){
                foreach($search_words as $word){
                    $h_search_word = '%' . addcslashes($word, '%_\\') . '%';
                    $search_albums = $search_albums->where(DB::raw("CONCAT(title, ' ', comment)"), 'like', $h_search_word);
                };
            }else{
                $search_user_id = User::where('id', '!=', \Auth::id());
                foreach($search_words as $word){
                    $h_search_word = '%' . addcslashes($word, '%_\\') . '%';
                    $search_user_id = $search_user_id->where('name', 'like', $h_search_word)->pluck('id');
                };
                if(empty($search_user_id) !== true){
                    $search_albums = $search_albums->where('user_id', $search_user_id);
                };
            }
        }
        
        $albums = $search_albums->get();
        
        return view('albums.index', [
            'title' => 'Photo_album',
            'albums' => $albums]);
    }

    public function create(){
        return view('albums.create', [
            'title' => '新規作成',]);
    }

    public function store(AlbumRequest $request){
        $album = Album::create($request->only([
            'user_id', 'title', 'comment', 'release']));
        foreach($request->file('photos') as $photo){
            $path = $photo->store('album_photos', 'public');
            $album->photos()->create([
                'path' => $path]);
        }
        return redirect()->route('albums.index');
    }

    public function destroy($id){
        $photos = Album::find($id)->photos()->get();
        foreach($photos as $photo){
            \Storage::disk('public')->delete($photo->path);
        }
        Album::find($id)->delete();
        return redirect()->route('albums.index');
    }

    public function show($id){
        $album = Album::find($id);
        return view('albums.show', [
            'title' => $album->title,
            'album' => $album]);
    }

    public function edit($id){
        if(Album::find($id)->user_id === \Auth::id()){
            $album = Album::find($id);
            return view('albums.edit', [
                'title' => 'アルバム編集',
                'album' => $album]);
        }else{
            return redirect()->route('albums.show', $id);
        }
    }
    
    public function update(Request $request, $id){
        Album::find($id)->update($request->only([
            'title', 'comment']));
        return redirect()->route('albums.show', $id);
    }
    
    public function deletePhoto($id){
        if(Album::find($id)->user_id === \Auth::id()){
            $album_photos = Album::find($id)->photos()->get();
            return view('albums.delete_photo', [
                'title' => '写真の削除',
                'album_id' => $id,
                'album_photos' => $album_photos]);
        }else{
            return redirect()->route('albums.show', $id);
        }
    }
    
    public function selectDeletePhoto(Request $request, $id){
        $photo_ids = $request->get('photo_ids');
        $select_photos_count = count($photo_ids);
        $photo_count = Photo::where('album_id', $id)->count();
        if($select_photos_count === $photo_count){
            $photos = Album::find($id)->photos()->get();
            foreach($photos as $photo){
                \Storage::disk('public')->delete($photo->path);
            }
            Album::find($id)->delete();
            return redirect()->route('albums.show' . \Auth::id());
        }else{
            foreach($photo_ids as $photo_id){
                $path = Photo::find($photo_id)->path;
                \Storage::disk('public')->delete($path);
                Photo::find($photo_id)->delete();
            }
            return redirect()->route('albums.show', $id);    
        };
    }
    
    public function pushPhoto($id){
        if(Album::find($id)->user_id === \Auth::id()){
            $album_photos = Album::find($id)->photos()->get();
            return view('albums.push_photo', [
                'title' => 'アルバムの追加',
                'album_id' => $id,
                'album_photos' => $album_photos]);
        }else{
            return redirect()->route('albums.show', $id);
        }
    }
    
    public function selectPushPhoto(PushPhotoRequest $request, $id){
        foreach($request->file('files') as $photo){
            $path = $photo->store('album_photos', 'public');
            Photo::create([
                'album_id' => $id,
                'path' => $path]);
        }
        return redirect()->route('albums.show', $id);
    }
    
    public function toggleRelease($id){
        $album = Album::find($id);
        if($album->release == '1'){
            $album->update([
                'release' => '0']);
        }else{
            $album->update([
                'release' => '1']);
        }
        return back();
    }
}
