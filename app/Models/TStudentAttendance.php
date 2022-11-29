<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TStudentAttendance extends Model
{
    use HasFactory;

    public function getAttendance($id)
    {

    
        
        return DB::select("SELECT  DISTINCT m_classes.id, AVG(t_student_attendances.attendance) as attend, m_classes.c_name,users.name
        FROM m_classes 
        LEFT JOIN t_student_classes ON t_student_classes.class_id = m_classes.id
         LEFT JOIN t_student_attendances ON t_student_attendances.class_id = m_classes.id
          JOIN users ON users.id = t_student_attendances.user_id 
        WHERE t_student_attendances.user_id = :id
        GROUP BY(t_student_classes.class_id)",
        [":id" => $id]);

        
    }

}
