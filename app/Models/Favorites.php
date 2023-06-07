<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorites extends Model
{
    protected $fillable=[
        'book',
        'user'
    ];
    use HasFactory;

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Books(){
        return $this->belongsTo(Books::class,'book');
    }
}
