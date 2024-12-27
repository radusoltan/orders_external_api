<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
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
        Product::factory(10)->create();
        Order::factory(50)->create()->each(function (Order $order) {

            $items = OrderItem::factory(rand(1,10))->make();
            $order->orderItems()->saveMany($items);

            $order->update([
                'total_amount' => $items->sum(function (OrderItem $item) {
                    return $item->price * $item->quantity;
                })
            ]);
        });
    }
}
