<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MSitemasterPublic extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MSitemasterPublic::create([
            "logo" => "logo.png",
            "sitename" => "My School",
            "favicon" => "logo.png",
            "facebook_link" => "https://www.facebook.com/extbrainedu",
            "youtube_link1" => "https://www.youtube.com/channel/UC5bcizZ7sVgUdFj5qJnExoQ",
            "youtube_link2" => "https://www.youtube.com/channel/UCGevWJFVkn02M-qa015E9AA",
            "phones" => "09-403559701",
            "copyright" => "Copyright @ exbrain",
            "created_by" => 1,
        ]);

    }
}
