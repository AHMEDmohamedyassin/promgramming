<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id' , 'class'
    ];

    public function user (){
        return $this->belongsTo(User::class , 'user_id');
    }
}
