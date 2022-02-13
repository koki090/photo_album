<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use App\Album;
use App\Follow;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function show($id){
        $user = User::find($id);
        $albums = Album::where('user_id', $id)->get();
        if($user->id === \Auth::id()){
            $album_count = Album::where('user_id', $id)->count();
        }else{
            $album_count = Album::where('user_id', $id)->where('release', 1)->count();
        }
        return view('users.show', [
            'title' => $user->name,
            'user' => $user,
            'album_count' => $album_count,
            'follower_count' => Follow::where('follow_id', $id)->count(),
            'follow_user_count' => Follow::where('user_id', $id)->count(),
            'albums' => $albums,
            'open_albums' => $albums->where('release', 1),
            'close_albums' => $albums->where('release', 0)]);
    }
    
    public function edit($id){
        if(User::find($id)->id === \Auth::id()){
            return view('users.edit', [
                'title' => 'ユーザー情報編集',
                'user' => \Auth::user()]);
        }else{
            return redirect()->route('users.show', $id);
        }
    }
    
    public function update(UserRequest $request, $id){
        $user = User::find($id);
        $path = '';
        $image = $request->file('image');
        if(isset($image)){
            $path = $image->store('user_images', 'public');
        };
        if($user->image !== ''){
            \Storage::disk('public')->delete(\Storage::url($user->image));
        }
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'profile' => $request->profile,
            'image' => $path,
            ]);
        return redirect()->route('users.show', $id);
    }
}
