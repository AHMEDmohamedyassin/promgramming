<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paidexam extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id' , 'exam_id'
    ];

    public function user (){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function exam (){
        return $this->belongsTo(exam::class , 'exam_id');
    }
}