<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'album_id', 'path'];
        
       public function album(){
           $this->belongsTo('App\Album');
       }
}
