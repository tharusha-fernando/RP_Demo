<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'author',
        //'date'
        'description',
        'catogory',
        //'cover_photo'
        'cover_photo'
    ];

    public function Reviews(){
        return $this->hasMany(Reviews::class);
        
    }

    public function Favorites(){
        return $this->hasMany(Favorites::class,'book');
    }

    public function Views(){
        return $this->hasMany(Views::class,'book');
    }
}
