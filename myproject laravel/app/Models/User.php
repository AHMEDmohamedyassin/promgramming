<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    // تمت الإضافة
    public function linkModel(){ // to make one to one relationship
        
        return $this->hasone('App\Models\Posts' , 'user_id' , 'id');
    }

    public function linkModelmany(){

        return $this->hasMany('App\Models\Posts' , 'user_id' , 'id'); // 'user_id' in post table and 'id' in user table
    }

    public function Role (){
        
        return $this->belongsToMany(Role::class)->withpivot('created_at'); // withpivote حتي يظهر الوقت
        // return $this->belongsToMany(Role::class , 'role_user' , 'user_id' , 'role_id'); custumize table name and column
        // 'role_user' => privote table  , 'user_id' => key of my id  , 'role_id' => key of forgin id
    }

    public function country(){
        return $this->belongsTo(country::class , 'country_id');
    }

    public function photos (){
        return $this->morphMany(Photo::class , 'imageable');
    }






    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
