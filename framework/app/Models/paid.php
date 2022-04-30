<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paid extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id' , 'item_id'
    ];

    public function user (){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function item (){
        return $this->belongsTo(item::class , 'item_id');
    }

}
