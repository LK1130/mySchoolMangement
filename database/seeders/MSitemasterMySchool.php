<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MSitemasterMySchool extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MSitemasterMyschool::create( [
            "logo" => "logo.png",
            "sitename" => "My School",
            "favicon" => "logo.png",
            "facebook_link" => "https://www.facebook.com/extbrainedu",                
            "youtube_link1" => "https://www.youtube.com/channel/UC5bcizZ7sVgUdFj5qJnExoQ",
            "youtube_link2" => "https://www.youtube.com/channel/UCGevWJFVkn02M-qa015E9AA",
            "youtube_link3" => "youtube.com/channel/UC8XLZzfIEzyYyJVYPugyA_Q",
            "messanger_link1" => "https://www.facebook.com/extbrainedu",
            "created_by" => 1,
        ]);

    }
}
