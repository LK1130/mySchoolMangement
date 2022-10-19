<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MGuideStep>
 */
class MGuideStepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "guide_id" => $this->faker->unique()->randomElement([1,2,3,4,5]),
            "step" => $this->faker->randomElement([1, 2]),
            "step_title" => $this->faker->text(50),
            "step_description" => $this->faker->paragraph(),
            "created_by" => 1,
        ];
    }
}
