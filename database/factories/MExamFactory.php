<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MExam>
 */
class MExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $examNames = [];
        for ($i = 1; $i <= 10; $i++) {
            array_push($examNames,"Assigment-$i");
            array_push($examNames, "Lesson-$i");
            array_push($examNames, "Homework-$i");
        };
        return [
            "e_name" => $this->faker->unique()->randomElement($examNames),
            "class_id" => $this->faker->randomElement([1, 2, 3,4,5]),
            "category_id" => $this->faker->randomElement([1, 2, 3]),
            "full_mark" => 10,
            "fail_mark" => 5,
            'created_by' => 1
        ];
    }
}
