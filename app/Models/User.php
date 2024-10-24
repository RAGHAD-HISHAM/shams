<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',  // Add 'name' to the fillable array
        'email',
        'password',
        // Add any other attributes that you want to allow for mass assignment
    ];
    
    // One-to-One (User belongs to Membership)
    public function membership()
    {
        return $this->belongsTo(Membership::class, 'membership_id');
    }

    // One-to-Many (User has many Borrowing records)
    public function borrowings()
    {
        return $this->hasMany(Borrowing::class, 'user_id');
    }

    // One-to-Many (User has many Purchases)
    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'user_id');
    }
    
}
