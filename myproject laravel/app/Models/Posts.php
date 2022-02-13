<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  // added

class Posts extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];
    
    protected $fillable = [
        'title' , 'writer' , 'user_id'
    ];

    public function linkModel(){
        return $this->belongsTo(User::class , 'user_id');  // for one to one relationship or one to many
    }

    public function photos (){
        return $this->morphMany(Photo::class , 'imageable');
    }

    public function tag (){
        return $this->morphToMany(Tag::class , 'taggable');
    }
}
