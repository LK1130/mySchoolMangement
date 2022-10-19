<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MInstructor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instructors = [
            [
                "i_name" => "Linn Ko Ko",
                "i_contact" => "09-421010735",
                "i_address" => "Yangon Thingangyun",
                "role_id" => 1,
                "created_by" => 1,
            ],
            [
                "i_name" => "Thein Naing Soe",
                "i_contact" => "09-123456789",
                "i_address" => "Tokyo Japan",
                "role_id" => 1,
                "created_by" => 1,
            ],
            [
                "i_name" => "Pyi Soe",
                "i_contact" => "09-123456789",
                "i_address" => "Yangon Thuwana",
                "role_id" => 3,
                "created_by" => 1,
            ]
        ];

        foreach ($instructors as  $instructor) {
            \App\Models\MInstructor::create($instructor);
        }
    }
}
