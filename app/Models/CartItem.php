<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends Model
{
    // Allow mass assignment for specific fields if needed
    protected $fillable = ['cart_id', 'product_id', 'quantity'];

    /**
     * Define the relationship with the Cart model.
     */
    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    /**
     * Define the relationship with the Product model.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
