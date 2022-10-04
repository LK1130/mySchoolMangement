<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoListController extends Controller
{
    

    public function index(){


        return inertia('Video');
    }
}
