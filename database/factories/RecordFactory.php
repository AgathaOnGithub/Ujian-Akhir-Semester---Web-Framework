<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecordFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'artist' => $this->faker->name(),
            'year' => $this->faker->year(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}   