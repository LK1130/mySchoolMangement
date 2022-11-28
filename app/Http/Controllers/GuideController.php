<?php

namespace App\Http\Controllers;
use App\Models\MGuide;

class GuideController extends Controller
{
    
    public function index(){
        $guides = MGuide::all();
        foreach ($guides as $guide) {
           $guide->guideStep;
        }

        return inertia('Guide', ['guides' => $guides]);
     
    }
}
