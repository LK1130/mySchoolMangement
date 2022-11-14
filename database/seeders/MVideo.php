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
                "v_name" => "第1課(文型)",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://drive.google.com/file/d/1woJ3uUHkYnIB7YiUKg0tef_yzqULb8LO/preview",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "第1課(例文)",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://drive.google.com/file/d/1tqNLBbS0RatMXrP9AOb_j2acrUR59uTl/preview",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "第1課(会話)",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://drive.google.com/file/d/1WnVwet3em7Es9_AcLhd6WmSpiPLqs75w/preview",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "第2課(文型)",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now", "+3 weeks"),
                "v_storage_link" =>  "https://drive.google.com/file/d/1eANBA1ecW4Mh4BtkZD2WsQlyXGgWhwop/preview",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "第2課(例文)",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now", "+3 weeks"),
                "v_storage_link" =>  "https://drive.google.com/file/d/1V76uVarwCy9fWWoXspQllo3rAUyki5MZ/preview",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "第2課(会話)",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  1,
                "v_date" =>  $faker->dateTimeBetween("now", "+3 weeks"),
                "v_storage_link" =>  "https://drive.google.com/file/d/1y5zl3rgVKGuskcZnmP0ZuDnIzbkjBLnB/preview",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "Web Developer Day1",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  4,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/XYn4wowkgKo",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "Web Developer Day2",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  4,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/LqomlPip2XM",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "Web Developer Day3",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  4,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/fbAuSQd1E-w",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "Web Developer Day4",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  4,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/ko-sOhi0PFA",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "Web Developer Day5",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  4,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/wUa7utmA9XA",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "JAVA SE Developer Day1",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  5,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/Hy2zjuG5nwY",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "JAVA SE Developer Day2",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  5,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/PAxu5M2zNnE",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ],
            [
                "v_name" => "JAVA SE Developer Day3",
                "v_description" =>  $faker->realtext(512),
                "class_id" =>  5,
                "v_date" =>  $faker->dateTimeBetween("now","+3 weeks"),
                "v_storage_link" =>  "https://youtu.be/1WeuJ3IMKjo",
                "v_storage_location" =>  "gdrive",
                "created_by" => 1,
            ]

        ];

        foreach ($videoNames as  $videoName) {
            \App\Models\MVideo::create($videoName);
        }
    }
}
