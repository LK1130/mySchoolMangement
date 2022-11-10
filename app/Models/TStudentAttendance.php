<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TStudentAttendance extends Model
{
    use HasFactory;

    public function getAttendance()
    {

        return DB::select('SELECT DISTINCT t_student_attendances.class_id, AVG(t_student_attendances.attendance) as attend, m_classes.c_name
        FROM t_student_attendances JOIN m_classes ON t_student_attendances.class_id = m_classes.id
        GROUP BY(t_student_attendances.class_id)');
    }
}
