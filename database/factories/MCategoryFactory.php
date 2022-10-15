<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MCategory>
 */
class MCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'c_name' => $this->faker->unique()->randomElement(["JP","WB","JVS"]),
            'c_description' => $this->faker->text(),
            'created_by' => 1
        ];
    }
}
