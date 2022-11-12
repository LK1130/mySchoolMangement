<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MVideo extends Model
{
    use HasFactory;


    public function verified_class($id, $vName = "",$vSort = "")
    {
      
        $query =  DB::table('m_videos')
            ->join('t_student_classes', 'm_videos.class_id', '=', 't_student_classes.class_id')
            ->join('users', 't_student_classes.user_id', '=', 'users.id')
            ->select('m_videos.id', 'm_videos.v_name', 'm_videos.v_description', 'm_videos.v_date', 'm_videos.v_storage_link', 'm_videos.v_storage_location')
            ->where('m_videos.del_flg', 0)
            ->where('users.id', $id);

      if($vSort == "DESC"){
        $query->when($vSort == "DESC",function($query) use ($vSort,$vName){
            return $query->where("m_videos.v_name", "like", "%" . $vName . "%")->orderBy('m_videos.v_date','DESC');
    });
      }else{
        $query->when($vSort == "ASC",function($query) use ($vSort,$vName){
            return $query->where("m_videos.v_name", "like", "%" . $vName . "%")->orderBy('m_videos.v_date','ASC');
      });
    }   
   
            // $query->when($vName != "", function ($query) use ($vName,$vSort) {
            //     if($vSort =="DESC"){
            //         return $query->when()
                
            //         ->orderBy('m_videos.v_date','DESC');
            //     }else{
            //         return $query->where("m_videos.v_name", "like", "%" . $vName . "%")
            //         ->orderBy('m_videos.v_date');
            //     }
            
            // });
       
      
        $videos =  $query->paginate(5);

        
        return $videos;
    }


    public function validVideoCount($id)
    {
        $videos =  DB::table('m_videos')
            ->join('t_student_classes', 'm_videos.class_id', '=', 't_student_classes.class_id')
            ->join('users', 't_student_classes.user_id', '=', 'users.id')
            ->select('m_videos.id', 'm_videos.v_name', 'm_videos.v_description', 'm_videos.v_date', 'm_videos.v_storage_link', 'm_videos.v_storage_location')
            ->where('m_videos.del_flg', 0)
            ->where('users.id', $id)
            ->count();
        return $videos;
    }

    public function today_video($id, $today)
    {
        $newVideo  = DB::table('m_videos')
            ->join('t_student_classes', 'm_videos.class_id', '=', 't_student_classes.class_id')
            ->join('m_classes', 't_student_classes.class_id', '=', 'm_classes.id')
            ->join('users', 't_student_classes.user_id', '=', 'users.id')
            ->select('m_videos.id', 'm_videos.v_name', 'm_videos.v_description', 'm_videos.v_date', 'm_classes.c_name', 'm_classes.c_start_time', 'm_classes.c_end_time')
            ->where('m_videos.v_date', '>=', $today)
            ->where('users.id', $id)
            ->orderBy('m_videos.v_date')
            ->first();
        return $newVideo;
    }


    public function  watchVideoById($id, $userid)
    {
        $query = DB::table('m_videos')
            ->join('t_student_classes', 'm_videos.class_id', '=', 't_student_classes.class_id')
            ->join('users', 't_student_classes.user_id', '=', 'users.id')
            ->select('m_videos.id', 'm_videos.v_name', 'm_videos.v_description', 'm_videos.v_storage_link', 'm_videos.v_date', 'm_videos.v_storage_location')
            ->where('m_videos.id', $id)
            ->where('users.id', $userid)
            ->first();
        return $query;
    }

    public function nextVideo($id, $userid)
    {
        $query = DB::table('m_videos')
            ->join('t_student_classes', 'm_videos.class_id', '=', 't_student_classes.class_id')
            ->join('users', 't_student_classes.user_id', '=', 'users.id')
            ->join('m_classes', 't_student_classes.class_id', '=', 'm_classes.id')
            ->select('m_videos.id', 'm_videos.v_name', 'm_videos.v_description', 'm_videos.v_storage_link', 'm_videos.v_date', 'm_classes.c_start_time')
            ->where('m_videos.id', '!=', $id)
            ->where('m_videos.id', '>', $id)
            ->where('users.id', $userid)
            ->orderBy('m_videos.id')
            ->get();
        return $query;
    }
}
