<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'user_id', 'title', 'comment', 'release'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function photos(){
        return $this->hasMany('App\Photo');
    }
    
    public function likes(){
        return $this->hasMany('App\Like');
    }
    
    public function liked_users(){
        return $this->belongsToMany('App\User', 'likes');
    }
    
    public function isLikedBy($id){
        return $result = $this->liked_users->pluck('id')->contains($id);
    }
    
    public function isReleased(){
        return $this->release == '1';
    }
}
