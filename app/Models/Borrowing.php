<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $fillable = [
        'user_id', 'book_id', 'borrowed_at', 'returned_at',
    ];

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Book model
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}