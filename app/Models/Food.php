<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image_path',
        'description',
        'inventory_count',
        'status',
        'restaurant_id'
    ];

    // Relationships
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function categories()
    {
        return $this->belongsToMany(FoodCategory::class, 'food_category_food');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
