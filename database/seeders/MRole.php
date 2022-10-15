<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                "r_name" => "SA",
                "created_by" => 1,
            ],
            [
                "r_name" => "AD",
                "created_by" => 1,
            ],
             [
                "r_name" => "IN",
                "created_by" => 1,
             ],
             [
                "r_name" => "AS",
                "created_by" => 1,
            ]
            ];

            foreach ($roles as  $role) {
                \App\Models\MRole::create($role);
            }
    }
}
