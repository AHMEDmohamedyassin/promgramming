<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'body' , 'user_id' , 'price'
    ];

    public function image (){
        return $this->morphMany(Image::class , 'imagable');
    }

    public function category (){
        return $this->belongsToMany(Category::class);
    }

    public function owner (){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function paid (){
        return $this->hasMany(paid::class , 'item_id' , 'id');
    }
}
