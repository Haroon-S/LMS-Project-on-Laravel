<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
