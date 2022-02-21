<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;

    protected $guarded = []; // or use fillable and select mass assignment columns

    public function user (){
        return $this->belongsTo(User::class , 'user_id');
    }

    protected function title(): Attribute
    {
        return new Attribute(
            get: fn($value) => strtoupper($value),
            set: fn($value) => strtolower($value),
        );
    }

    }
