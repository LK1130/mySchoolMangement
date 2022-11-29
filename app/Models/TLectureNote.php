<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TLectureNote extends Model
{
    use HasFactory;


    public function lectureById($id){
               
       return DB::table('t_lecture_notes')
        ->where('t_lecture_notes.video_id',$id)
        ->where('t_lecture_notes.del_flg',0)
        ->get();
    }


    public function downloadLinkById($id) {
        return DB::table('t_lecture_notes')
        ->select('t_lecture_notes.l_storage_link','t_lecture_notes.l_name')
        ->where('t_lecture_notes.id',$id)
        ->where('t_lecture_notes.del_flg',0)
        ->first();
    }
}
