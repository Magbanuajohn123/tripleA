<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    // Define the fields that can be mass assigned
    protected $fillable = [
        'product_name',
        'product_quantity',
        'price_per_pc',
        'product_image', // <--- IMPORTANT: Ensure this is present
    ];

    // If you prefer to use $guarded = [], it makes all fields fillable by default.
    // protected $guarded = [];
}
