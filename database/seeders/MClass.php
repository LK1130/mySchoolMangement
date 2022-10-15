<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                "c_name" => "Batch 18 N5",
                "c_description" => "SEJ Japanese Class",
                "c_start_date" => "2022/09/15",
                "c_end_date" => "2022/12/15",
                "c_day" => "0010101",
                "c_start_time" => "18:00",
                "c_end_time" => "20:00",
                "c_fees" => 99000,
                "instructor_id" => 2,
                "category_id" => 1,
                "created_by" => 1,
            ],
            [
                "c_name" => "Batch 16 N4",
                "c_description" => "AUG Japanese Class",
                "c_start_date" => "2022/10/15",
                "c_end_date" => "2023/02/15",
                "c_day" => "1000001",
                "c_start_time" => "09:00",
                "c_end_time" => "12:00",
                "c_fees" => 150000,
                "instructor_id" => 2,
                "category_id" => 1,
                "created_by" => 1,
            ],
            [
                "c_name" => "Batch 9 Web Developer",
                "c_description" => "SEJ Web Developer Class",
                "c_start_date" => "2023/01/01",
                "c_end_date" => "2023/07/01",
                "c_day" => "0101010",
                "c_start_time" => "15:00",
                "c_end_time" => "17:00",
                "c_fees" => 400000,
                "instructor_id" => 1,
                "category_id" => 2,
                "created_by" => 1,
            ],
            [
                "c_name" => "Batch 10 Web Developer",
                "c_description" => "AUG Web Developer Class",
                "c_start_date" => "2022/09/15",
                "c_end_date" => "2023/03/15",
                "c_day" => "0101010",
                "c_start_time" => "11:00",
                "c_end_time" => "13:00",
                "c_fees" => 290000,
                "instructor_id" => 1,
                "category_id" => 2,
                "created_by" => 1,
            ],
            [
                "c_name" => "Batch 3 JAVA SE Developer",
                "c_description" => "SEJ JAVA SE Developer Class",
                "c_start_date" => "2022/09/26",
                "c_end_date" => "2023/01/01",
                "c_day" => "0101010",
                "c_start_time" => "15:00",
                "c_end_time" => "17:00",
                "c_fees" => 200000,
                "instructor_id" => 3,
                "category_id" => 3,
                "created_by" => 1,
            ]

        ];

        foreach ($classes as  $class) {
            \App\Models\MClass::create($class);
        }
    }
}
