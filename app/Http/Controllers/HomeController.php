<?php

namespace App\Http\Controllers;

use App\Models\TStudentClass;
use App\Models\TStudentExam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $class = new TStudentClass();
        $exam   = new TStudentExam();
        
        $examRank = $exam->showRankTable();
        $totalClass = $class->totalClass(Auth::id());
        return inertia("Home", ['classes' => $totalClass,'examRank' => $examRank]);
    }
}
