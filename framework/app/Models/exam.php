<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id' , 'exam' , 'duration' , 'student' , 'state' , 'title' , 'start' , 'end' , 'price'
    ];

    public function user (){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function grade (){
        return $this->hasMany(Grade::class , 'exam_id' , 'id');
    }

    public function paid (){
        return $this->hasMany(paidexam::class , 'exam_id' , 'id');
    }
}
