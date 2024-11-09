<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image', 'article', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function baskets()
    {
        return $this->hasMany(Basket::class);
    }
}