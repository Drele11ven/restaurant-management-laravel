<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relationships
    public function foods()
    {
        return $this->belongsToMany(Food::class, 'food_category_food');
    }
}
