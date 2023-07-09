<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'image', 'description', 'available'
    ];

    // Relationship with Borrowing model
    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}
