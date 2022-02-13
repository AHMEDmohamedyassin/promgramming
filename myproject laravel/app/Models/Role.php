<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    public function users (){
        
        return $this->belongsToMany(User::class);
        // return $this->belongsToMany(Role::class , 'role_user' , 'user_id' , 'role_id'); custumize table name and column
        // 'role_user' => privote table  , 'user_id' => key of my id  , 'role_id' => key of forgin id
    }



}
