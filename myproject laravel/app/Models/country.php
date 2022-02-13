<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany('App\Models\User' , 'country_id' , 'id');
    }
    public function user(){
        return $this->hasone('App\Models\User' , 'country_id' , 'id');
    }
    public function posts(){
        return $this->hasManyThrough(Posts::class , User::class);
        // return $this->hasManyThrough(Posts::class , User::class , 'country_id' , 'user_id');
        // posts::class => class where posts found 
        // user::class  => intermidiate class
        // country_id   => column in user table     
        // user_id      => user column in post table
    }
}
