<?php

namespace App\Http\Controllers;

use App\Models\MVideo;
use App\Models\TLectureNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoListController extends Controller
{
    public function index($id = "")
    {
        if ($id == "") abort(404);

        $videos = new MVideo();
        $lectures = new TLectureNote();

        $video = $videos->watchVideoById($id, Auth::id());
        if (!$video) abort(404);

        $nextvideo = $videos->nextVideo($id, Auth::id());      
        $lecture = $lectures->lectureById($id);
        
        return inertia('Video', 
        [
        'video' => $video,
        'lecture' => $lecture,
        'next' => $nextvideo
    ]);
    }
}
