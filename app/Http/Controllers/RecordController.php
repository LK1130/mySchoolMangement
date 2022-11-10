<?php

namespace App\Http\Controllers;

use App\Models\MVideo;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class RecordController extends Controller
{

    /**
     * Initial State
     */
    public function index()
    {

        $video = new MVideo();
        $videos  = $video->verified_class(Auth::id());

        $count = $video->validVideoCount(Auth::id());

        $date = new DateTime("now", new DateTimeZone('Asia/Yangon'));
        $today = $date->format('Y-m-d h:m:s');

        $newVideo = $video->today_video(Auth::id(), $today);
        
        return Inertia::render('Recording', ['videos' => $videos, 'count' => $count, 'newvideo' => $newVideo]);
    }


    public function search(Request $request)
    {
        $video = new MVideo();
       
        // dd($request->videoSort);
        $videos  = $video->verified_class(Auth::id(),$request->videoName,$request->videoSort);
        
       return response()
       ->json($videos);
    }
}
