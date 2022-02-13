<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'user_id', 'album_id'];
    
    public function scopeIsLikeCount($query, $id){
        return $query->where('album_id', $id)->count();
    }
}
