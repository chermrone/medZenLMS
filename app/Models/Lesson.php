<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'video_url',
        'video_title'
    ];

    public function parts()
    {
        return $this->hasMany(Part::class);
    }
}
