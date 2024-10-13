<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;
    // Many-to-One (PurchaseDetail belongs to Book)
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    // Many-to-One (PurchaseDetail belongs to Purchase)
    public function purchase()
    {
        return $this->belongsTo(Purchase::class, 'purchase_id');
    }
}
