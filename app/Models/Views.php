<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Views extends Model
{
    use HasFactory;
    protected $fillable = [
        'user',
        'book'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user');
    }

    public function Books()
    {
        return $this->belongsTo(Books::class, 'book');
    }
}
