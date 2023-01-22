<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars>
 */
class CarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
           'Name'=>$this->faker->name(),
           'Year'=>$this->faker->numberBetween(2000,date('Y')),
           'Mark'=>$this->faker->name(),
           'Model'=>$this->faker->name(),
           'Size'=>$this->faker->numberBetween(2,8)
        ];
    }
}
