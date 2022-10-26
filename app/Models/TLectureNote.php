<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TLectureNote extends Model
{
    use HasFactory;


    public function lectureById($id){
               
       $query = DB::table('t_lecture_notes')
        ->where('t_lecture_notes.video_id',$id)
        ->where('t_lecture_notes.del_flg',0)
        ->get();

      
        return $query;

    }
}
