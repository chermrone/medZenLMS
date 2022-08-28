<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title'
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
