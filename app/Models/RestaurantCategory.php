<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relationships
    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'restaurant_category_restaurant');
    }
}
