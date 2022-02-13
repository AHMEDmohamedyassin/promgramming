<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = ['name','path'];

    public function taggable(){
        return $this->morphToMany(tag::class , 'taggable');
    }

    public function getNameAttribute($value){   //لتكبير أول حرف من الاسم عند استدعئه من قاعدة البيانات
        return strtoupper($value);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = strtoupper($value);
    }

    public static function scopeThequery ($query){
        return $query -> orderBy('id' , 'asc')->get();
    }

}
