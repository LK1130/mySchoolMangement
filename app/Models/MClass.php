<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MClass extends Model
{
    use HasFactory;

    public function classById($id){

        return  DB::table('m_classes')
        ->where('m_classes.id',$id)
        ->get();

    }
}
