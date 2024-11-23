<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'restaurant_id' => Restaurant::inRandomOrder()->first()->id,
            'user_id' => User::where('role', 'Customer')->inRandomOrder()->first()->id,
            'total_price' => $this->faker->randomFloat(2, 10, 200),
            'status' => $this->faker->randomElement(['New', 'Preparing', 'Dispatched', 'Delivered']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
