<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // nom des tables
    protected $fillable = ['name', 'description', 'price', 'image', 'stock', 'product_category_id'];

}
