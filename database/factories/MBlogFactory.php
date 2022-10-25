<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MBlog>
 */
class MBlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "b_title" => $this->faker->text(50),
            "b_description" => $this->faker->paragraph(10),
            "b_photo" => "/img/blog-view.png",
            "created_by" => 1,
        ];
    }
}
