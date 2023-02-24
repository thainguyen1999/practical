<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            ///
            "name"=> $this->faker->unique()->name,
            "age"=>random_int(18,30),
            "address"=>$this->faker->address,
            "telephone"=>$this->faker->phoneNumber(),

        ];
    }
}
