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

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'password',
        'role',
    ];



    public function image (){
        return $this->morphMany(Image::class , 'imagable');
    }

    public function item (){
        return $this->hasMany(Item::class , 'user_id' , 'id');
    }

    public function exam (){
        return $this->hasMany(exam::class , 'user_id' , 'id');
    }

    public function studentclass (){
        return $this->hasOne(StudentClass::class , 'user_id' , 'id');
    }

    public function grade (){
        return $this->hasMany(Grade::class , 'user_id' , 'id');
    }

    public function paid (){
        return $this->hasMany(paid::class , 'user_id' , 'id');
    }

    public function paidexam (){
        return $this->hasMany(paidexam::class , 'user_id' , 'id');
    }



















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
