<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    // Many-to-One (Purchase belongs to User)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // One-to-Many (Purchase has many PurchaseDetails)
    public function purchaseDetails()
    {
        return $this->hasMany(PurchaseDetail::class, 'purchase_id');
    }
}
