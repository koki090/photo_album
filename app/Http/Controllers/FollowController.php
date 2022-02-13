<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follow;

class FollowController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index($id){
        $user = User::find($id);
        $follow_users = $user->follow_users()->get();
        return view('follows.index', [
            'title' => 'フォロー一覧',
            'user' => $user,
            'follow_users' => $follow_users]);
    }
    
    public function follower($id){
        $user = User::find($id);
        $followers = $user->followers()->get();
        return view('follows.follower', [
            'title' => 'フォロワー一覧',
            'user' => $user,
            'followers' => $followers]);
    }
    
    public function toggleFollow($id){
        if(\Auth::user()->isFollowBy($id)){
            Follow::where('user_id', \Auth::id())->where('follow_id', $id)->first()->delete();
        }else{
            Follow::create([
                'user_id' => \Auth::id(),
                'follow_id' => $id]);
        }
        return redirect()->route('users.show', $id);
    }
}
