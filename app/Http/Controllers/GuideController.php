<?php

namespace App\Http\Controllers;

use App\Models\MGuide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    
    public function index(){
        

        $guides = new MGuide();
        $guide = $guides->guideStep();
        
           $allGuides = MGuide::where("del_flg", 0)
           ->get();
      
        // guide title 
       
        return inertia('Guide', ['allGuides' => $allGuides, 'guides' => $guide]);
     
    }
}
