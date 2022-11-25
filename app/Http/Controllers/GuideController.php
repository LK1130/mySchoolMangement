<?php

namespace App\Http\Controllers;

use App\Models\MGuide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    
    public function index(){
        $guides = new MGuide();
        $guide = $guides->guideStep();
        
        return inertia('Guide', ['guides' => $guide]);
     
    }
}
