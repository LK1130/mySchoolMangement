<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MVideo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $videoNames = [
            [
                "v_name" => "Hiragana Day1",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/0qvG4cpdxAE",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "Hiragana Day2",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/GY6KOh2pF78",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "Katakana Day3",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/jRFrvOJeYQk",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "Katakana Day4",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/KvEHv8z4aTY",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "第1課",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/Z06Kb882IeQ",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "第2課",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/wMQCc8o3KG0",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "第3課",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/oow3_OIKZIw",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "第4課",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/wccQ8RFoUBE",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "第5課",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/hb_oVa75IUc",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "Web Developer Day1",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  4,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/XYn4wowkgKo",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "Web Developer Day2",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  4,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/LqomlPip2XM",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "Web Developer Day3",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  4,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/fbAuSQd1E-w",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "Web Developer Day4",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  4,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/ko-sOhi0PFA",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "Web Developer Day5",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  4,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/wUa7utmA9XA",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "JAVA SE Developer Day1",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  5,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/Hy2zjuG5nwY",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "JAVA SE Developer Day2",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  5,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/PAxu5M2zNnE",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ],
            [
                "v_name" => "JAVA SE Developer Day3",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  5,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/1WeuJ3IMKjo",
                "v_storage_location" =>  "youtube",
                "created_by" => 1,
            ]

        ];

        foreach ($videoNames as  $videoName) {
            \App\Models\MVideo::create($videoName);
        }
    }
}
