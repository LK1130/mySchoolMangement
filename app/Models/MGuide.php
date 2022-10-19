<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MGuide extends Model
{
    use HasFactory;


    public function guideStep(){

         $guides  =  DB::table('m_guides')
            
            ->Join('m_guide_steps','m_guides.id','=','m_guide_steps.guide_id')
            ->select('m_guides.id','m_guides.g_title','m_guide_steps.step','m_guide_steps.step_title','m_guide_steps.step_description','m_guide_steps.del_flg')
            ->where('m_guides.del_flg',0)
            ->orderBy('m_guides.id')
            ->get();

         return $guides;

    }
}
