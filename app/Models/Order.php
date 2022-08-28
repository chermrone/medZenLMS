<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_date',
        'expiration_date',
        'free',
        'payed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function creditCard()
    {
        return $this->belongsTo(CreditCard::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
