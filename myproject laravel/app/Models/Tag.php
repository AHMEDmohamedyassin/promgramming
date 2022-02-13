<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function post (){
        return $this->morphToMany(Posts::class , 'taggable');
    }

    public function video (){
        return $this->morphToMany(Video::class , 'taggable');
    }
}
