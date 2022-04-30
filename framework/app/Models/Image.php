<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'path' , 'imagable_name' , 'imagable_id' , 'freeorpaid'
    ];

    public function imagable (){
        return $this->morphTo();
    }

}
