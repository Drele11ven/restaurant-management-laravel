<?php

namespace Database\Factories;

use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Food::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 5, 100),
            'image_path' => 'https://via.placeholder.com/150',
            'description' => $this->faker->sentence,
            'inventory_count' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement(['Available', 'Unavailable']),
            'restaurant_id' => Restaurant::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
