<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LastRead extends Model
{
    use HasFactory;
    protected $fillable=[
        'book',
        'user',
        'page'
    ];

    public function User(){
        return $this->BelongsTo(User::class,'user');
    }

    public function Books(){
        return $this->belongsTo(Books::class,'book');
    }
}
