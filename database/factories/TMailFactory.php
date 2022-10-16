<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TMail>
 */
class TMailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "m_title" => $this->faker->realText(20),
            "m_description" => $this->faker->realText(200),
            "class_id" => null,
            "user_id" => $this->faker->numberBetween(1,58),
            "m_category" => $this->faker->randomElement([1,2,3]),
            "created_by" => 1
        ];
    }
}
