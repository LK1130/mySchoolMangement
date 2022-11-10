<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TStudentExam extends Model
{
    use HasFactory;

    /**
     * 
     */
    public function showRankTable($exam_id)
    {
        return  DB::select(
            "SELECT
                users.id,
                users.name,
                t_student_exams.date_submitted,
                m_exams.e_name,
                t_student_exams.mark,
                Rank() OVER(ORDER BY  t_student_exams.mark DESC) rank
            FROM
                `t_student_exams`
                JOIN users ON `t_student_exams`.`user_id` = users.id
                JOIN m_exams ON `t_student_exams`.`exam_id` = m_exams.id
                WHERE t_student_exams.exam_id = :id",
            [":id" => $exam_id]
        );
    }

    /**
     * 
     */
    public function  allUserRank(){

        return "SELECT
        users.id,
        users.name,
        t_student_exams.date_submitted,
        m_exams.e_name,
        t_student_exams.mark

    FROM
        `t_student_exams`
        JOIN users ON `t_student_exams`.`user_id` = users.id
        JOIN m_exams ON `t_student_exams`.`exam_id` = m_exams.id
       ORDER BY users.name,m_exams.id";
    }

    /**
     * 
     */
    public function getExamList()
    {
        return TStudentExam::distinct()->orderby("id")->pluck('exam_id');
    }

    /**
     * 
     */
    public function getUserRank()
    {
        return DB::select(
            "SELECT
            users.id,
            users.name,
            SUM(t_student_exams.mark) sumMark,
            Rank() OVER(ORDER BY   SUM(t_student_exams.mark) DESC ) rank
        FROM
                `t_student_exams`
                JOIN users ON `t_student_exams`.`user_id` = users.id
                JOIN m_exams ON `t_student_exams`.`exam_id` = m_exams.id
                GROUP By t_student_exams.user_id
                ORDER By rank"
        );
    }
}
