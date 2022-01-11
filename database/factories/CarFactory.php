<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->randomElement(['ford', 'toyota', 'honda', 'hyundai', 'mitsubishi', 'subaru', 'rolls royce']),
            'model' => $this->faker->randomElement(['mustang', 'corolla', 'civic', 'accord', 'santa fe', 'outback', 'f-150']),
            'year' => $this->faker->numberBetween(1990, 2019),
            'color' => $this->faker->randomElement(['black', 'white', 'red', 'blue', 'green', 'yellow', 'silver', 'gold']),
            'plate' => $this->faker->regexify('[A-Z]{3}[0-9]{3}'),
        ];
    }
}
