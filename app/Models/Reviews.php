<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Reviews extends Model
{
    use HasFactory;
    protected $fillable=[
        'review',
        'user',
        'book'
    ];
    public function User(){
        return $this->belongsTo(User::class,'user');
    }

    public function Book(){
        return $this->belongsTo(Books::class,'book');
    }
}
