<?php

namespace App\Models;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TStudentClass extends Model
{
    use HasFactory;

    public function totalClass($id)
    {
        $query = DB::table('t_student_classes')
            ->join('m_classes','t_student_classes.class_id','=','m_classes.id')
            ->where('t_student_classes.user_id', $id)
            ->orderBy('t_student_classes.class_id')
            ->get();

         
          
        return $query;
        // dd($query);
    }


    public function getClassId($id){

        $query = DB::table('t_student_classes')
        ->select('m_classes.id')
        ->join('m_classes','t_student_classes.class_id','=','m_classes.id')
        ->where('t_student_classes.user_id', $id)
        ->orderBy('t_student_classes.class_id')
        ->get();

     
        
    return $query;
    }
    public function totalStudents($id){

        $query = DB::select("SELECT count(t_student_classes.id) as counts FROM `t_student_classes` WHERE t_student_classes.class_id IN 
        ($id) GROUP BY class_id");
        

        
        return $query;
    }
}
