<?php

namespace App\Http\Controllers;

use App\Models\MVideo;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{


    public function index()
    {


        $videos =   MVideo::where('del_flg', 0)->paginate(5);
        $count = MVideo::where('del_flg', 0)->count();

        $date = new DateTime("now", new DateTimeZone('Asia/Yangon'));
        $today = $date->format('Y-m-d h:m:s');
        $newVideo  = DB::table('m_videos')
            ->join('m_classes', 'm_videos.class_id', '=', 'm_classes.id')
            ->where('m_videos.v_date', '>=', $today)
            ->first();



        return inertia('Recording', ['videos' => $videos, 'count' => $count, 'newvideo' => $newVideo]);
    }
}
