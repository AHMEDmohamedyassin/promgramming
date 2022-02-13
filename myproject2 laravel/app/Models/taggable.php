<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taggable extends Model
{
    use HasFactory;

    // protected $fillable = ['tag_id' , 'taggable_id' , 'taggable_type'];

    public function taggable(){
        return $this->morphToMany(tag::class , 'taggable');
    }
}
