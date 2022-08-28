<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;
    protected $fillable = [
        'expiration_date',
        'number',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
