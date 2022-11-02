<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MExam extends Model
{
    use HasFactory;

    // public function examMark(){

    //     DB::table('m_exams')
    //     ->select('m_exams.full_mark,m_exams.fail_mark')
    //     ->where('del_flg')
    // }
}
