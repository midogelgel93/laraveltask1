<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// use Database\Factories\Order;
// use Database\Factories\OrderProduct;
// use Database\factories\Product;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $order =Order::inRandomOrder()->first();
        $product = Product::inRandomOrder()->first();
        $amount =fake()->numberBetween(1,$product->amount);
        $order->total += ($product->price * $amount);
        $order->save();
        $product->amount -= $amount;
        $product->save();
        return [

            'order_id'=> $order->id,
            'product_id'=> $product->id,
            'price'=> $product->price,
            'amount'=> $amount

            //
        ];
    }
}
