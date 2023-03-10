<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrivilegeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word(),
            'clearance'=>$this->faker->numberBetween(1,2),
        ];
    }
}
