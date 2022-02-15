<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Like;

class LikeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $like_albums = \Auth::user()->likeAlbum()->get();
        return view('likes.index', [
            'title' => 'お気に入り一覧',
            'like_albums' => $like_albums]);
    }
    
    public function toggleLike($id){
        $target_album = Album::find($id);
        $user_id = \Auth::id();
        if($target_album->isLikedBy(\Auth::id())){
            Like::where('user_id', '=', $user_id)->where('album_id', '=', $target_album->id)->first()->delete();
        }else{
            Like::create([
                'user_id' => $user_id,
                'album_id' => $target_album->id]);
        }
        return back();
    }
}
