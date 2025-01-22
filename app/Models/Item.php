<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'year', 'image'];

    public function getImageUrlAttribute()
    {
        // Mengacu ke folder public/images/
        return asset('images/' . $this->image);
    }
}
