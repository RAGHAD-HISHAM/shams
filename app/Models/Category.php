<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_photo'
    ];
     // Many-to-Many (Category belongs to many Books)
     public function books()
     {
         return $this->belongsToMany(Book::class, 'book_category', 'category_id', 'book_id');
     }
}
