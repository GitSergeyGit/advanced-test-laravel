<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'product2order')->withTimestamps();
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'test');
    }
}