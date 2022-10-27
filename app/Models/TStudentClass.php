<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TStudentClass extends Model
{
    use HasFactory;

    public function totalClass($id)
    {
        $query = DB::table('t_student_classes')
            ->where('t_student_classes.user_id', $id)
            ->get();

        return $query;
    }
}
