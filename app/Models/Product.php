<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'size_product');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, "color_product");
    }
}
