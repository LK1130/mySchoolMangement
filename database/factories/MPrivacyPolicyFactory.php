<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MPrivacyPolicy>
 */
class MPrivacyPolicyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "p_title" => $this->faker->text(50),
            "p_description" => $this->faker->paragraph(10),
            "p_photo" => "blog-view.png",
            "category_id" => $this->faker->randomElement([1, 2, 3]),
            "created_by" => 1,
        ];
    }
}
