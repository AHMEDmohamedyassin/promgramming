<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function taggable(){
        return $this->morphToMany(tag::class , 'taggable');
    }
}
