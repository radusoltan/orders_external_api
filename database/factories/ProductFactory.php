<?php

namespace Database\Factories;

use Bezhanov\Faker\Provider\Commerce;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Commerce($faker));
        return [
            'name' => $faker->productName,
            'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
