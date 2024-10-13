<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    // One-to-Many (Book has many Borrowing records)
    public function borrowings()
    {
        return $this->hasMany(Borrowing::class, 'book_id');
    }

    // One-to-Many (Book appears in many PurchaseDetails)
    public function purchaseDetails()
    {
        return $this->hasMany(PurchaseDetail::class, 'book_id');
    }

    // Many-to-Many (Book belongs to many Categories)
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
    }
}
