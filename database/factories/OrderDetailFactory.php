<?php

namespace Database\Factories;

use App\Models\Food;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = OrderDetail::class;

    public function definition(): array
    {
        return [
            'order_id' => Order::inRandomOrder()->first()->id,
            'food_id' => Food::inRandomOrder()->first()->id,
            'quantity' => $this->faker->numberBetween(1, 5),
            'subtotal_price' => $this->faker->randomFloat(2, 10, 50),
        ];
    }
}
