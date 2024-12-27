<?php

namespace Database\Factories;

use App\Models\Order;
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
    public function definition(): array
    {
        return [
            'order_number' => $this->faker->unique()->uuid(),
            'status' => $this->faker->randomElement([Order::STATUS_PENDING, Order::STATUS_CANCELLED, Order::STATUS_DELIVERED, Order::STATUS_SHIPPED]),
            'total_amount' => 0
        ];
    }
}
