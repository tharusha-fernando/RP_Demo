<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Books;

class Chapters extends Model
{
    use HasFactory;
    public function Books(){
        return $this->hasOne(Books::class);
    }
}
