<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;
     // Many-to-One (Borrowing belongs to User)
     public function user()
     {
         return $this->belongsTo(User::class, 'user_id');
     }
 
     // Many-to-One (Borrowing belongs to Book)
     public function book()
     {
         return $this->belongsTo(Book::class, 'book_id');
     }
}
