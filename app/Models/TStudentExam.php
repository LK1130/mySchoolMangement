<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TStudentExam extends Model
{
    use HasFactory;

    public function showRankTable(){

//         SELECT t_student_exams.date_submitted,m_exams.e_name, t_student_exams.mark  FROM `t_student_exams`
// JOIN users ON `t_student_exams`.`user_id` = users.id
// JOIN m_exams ON `t_student_exams`.`exam_id` = m_exams.id

// WHERE t_student_exams.date_submitted < NOW()
// GROUP BY t_student_exams.exam_id
// ORDER BY t_student_exams.exam_id ,t_student_exams.mark DESC

$query=    DB::select(
    DB::raw("
        SELECT t_student_exams.date_submitted,m_exams.e_name, t_student_exams.mark  FROM `t_student_exams`
    JOIN users ON `t_student_exams`.`user_id` = users.id
    JOIN m_exams ON `t_student_exams`.`exam_id` = m_exams.id
    WHERE t_student_exams.date_submitted < NOW()
    GROUP BY t_student_exams.exam_id
    ORDER BY t_student_exams.exam_id ,t_student_exams.mark DESC"));
   

    return $query;
    }
}
