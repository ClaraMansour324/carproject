<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->company(),
            'price'=>fake()->company(),
            'description'=>fake()->sentence(),
            'active'=>fake()->numberBetween(0,1),
            'image'=>fake()->imageUrl(640,480,'animals',true),
            'category_id'=>fake()->numberBetween(1,5),
        ];
    }
}
