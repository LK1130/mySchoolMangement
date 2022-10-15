<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(57)->create();
        \App\Models\MCategory::factory(3)->create();
        $this->call(MRole::class);
        $this->call(MInstructor::class);
        $this->call(MClass::class);
        \App\Models\MExam::factory(30)->create();
        $this->call(MSitemasterMySchool::class);
        $this->call(MSitemasterPublic::class);
        \App\Models\MBlog::factory(20)->create();
        \App\Models\MPrivacyPolicy::factory(20)->create();
        \App\Models\MGuide::factory(5)->create();
        \App\Models\MGuideStep::factory(5)->create();
        $this->call(MVideo::class);
    }
}
