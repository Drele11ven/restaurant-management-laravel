<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Create Restaurant Managers first
        \App\Models\User::factory(3)->create([
            'role' => 'Restaurant Manager', // Ensure role is 'Restaurant Manager'
        ]);
        // Create users (including restaurant managers and customers)
        \App\Models\User::factory(5)->create(); // 5 users for testing purposes

        // Create food categories
        $foodCategories = \App\Models\FoodCategory::factory(5)->create(); // Create 5 food categories

        // Create restaurants with managers
        \App\Models\Restaurant::factory(3)->create(); // 3 restaurants

        // Continue with other seeders
        \App\Models\RestaurantCategory::factory(5)->create(); // 5 categories

        // Create users (including restaurant managers and customers)
        \App\Models\User::factory(5)->create(); // 5 users for testing purposes

        // Create restaurants with managers
        \App\Models\Restaurant::factory(3)->create(); // 3 restaurants

        // Create restaurant categories
        \App\Models\RestaurantCategory::factory(5)->create(); // 5 categories

        // Attach restaurants to categories (many-to-many)
        $restaurants = \App\Models\Restaurant::all();
        $categories = \App\Models\RestaurantCategory::all();
        foreach ($restaurants as $restaurant) {
            $restaurant->categories()->attach(
                $categories->random(min(rand(1, 3), $categories->count()))->pluck('id')->toArray()
            );
        }

        // Create foods
        \App\Models\Food::factory(50)->create(); // 10 food items

        // Attach foods to categories (many-to-many)
        $foods = \App\Models\Food::all();
        $foodCategories = \App\Models\FoodCategory::all();
        foreach ($foods as $food) {
            $food->categories()->attach(
                $foodCategories->random(min(rand(1, 3), $foodCategories->count()))->pluck('id')->toArray()
            );
        }

        // Create orders
        \App\Models\Order::factory(5)->create(); // 5 orders

        // Create order details for each order
        \App\Models\OrderDetail::factory(20)->create(); // 20 order details

        // Create user addresses
        \App\Models\UserAddress::factory(10)->create(); // 10 addresses for customers
    }

}
