<?php

namespace App\Http\Controllers;

use App\Models\TStudentAttendance;
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
        $attendances = new TStudentAttendance();

        $allUserRank = [];


        //get attendance 
        $attendance  = $attendances->getAttendance();
        
        //get Exam list
        $examList = $exam->getExamList();
        //loop for each examid 
        foreach ($examList as  $examid) {
            //collect all data to array
            $allUserRank = array_merge($allUserRank, $exam->showRankTable($examid));
        }

        // dd($allUserRank);
        //filter for get only current login user id
        $examRank = array_filter($allUserRank, function ($rank) {
            return ($rank->id == Auth::id());
        });

    // dd($examRank);
        //get all user rank
        $userRanks = $exam->getUserRank();

        //filter for get only current login user id
        $userRank = array_filter($userRanks, function ($ranking) {
            return ($ranking->id == Auth::id());
        });



        $totalClass = $class->totalClass(Auth::id());


        return inertia("Home", [
            'classes' => $totalClass,
            'attendance' => $attendance,
            'examRanks' => $examRank,
            'rank_mark' => $userRank,
            'all_ranks' => $userRanks

        ]);
    }
}
