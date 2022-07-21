<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'name'  => $this->faker->name(),
            'gender' => $this->faker->text(),
            'developer' => $this->faker->company(),
            'distributor' => $this->faker->company(),
            'launch' => $this->faker->date(),
            'so'  => $this->faker->text(),
            'processor' => $this->faker->text(),
            'memory_ram'  => $this->faker->randomNumber(),
            'storage_req'  => $this->faker->randomNumber(),
            'video_card' => $this->faker->text(),
        ];
    }
}
