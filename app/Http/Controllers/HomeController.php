<?php

namespace App\Http\Controllers;

use App\Models\MClass;
use App\Models\TStudentAttendance;
use App\Models\TStudentClass;
use App\Models\TStudentExam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Js;
use PhpParser\Node\Expr\Cast\Object_;

class HomeController extends Controller
{
    public function index()
    {
        $classes = new TStudentClass();
        $exam   = new TStudentExam();
        $attendances = new TStudentAttendance();

        $allUserRank = [];
        $allClass = [];

        $oneExamCallRank = [];


        //get ALl classid
        $allClassID = [];
        // get final chart reuslt
        $chartRankResult = [];

       $id  = $classes->getClassId(Auth::id());
    //    dd($id);
        $specificClassRank = [];
        $oneClassRank = [];
        
        $oneClassEachExamRank = [];
        // get students 
             
        //get attendance  
        $attendance  = $attendances->getAttendance(Auth::id());
        $examPercent = $exam->getExamRankPercent(Auth::id());
      
        //get Exam list
        $examList = $exam->getExamList();
            // dd($examList);
        //get Class List
        $totalClass = $classes->totalClass(Auth::id());


        //loop for each examid 
        foreach ($examList as  $examid) {
            //collect all data to array

           
            $allUserRank = array_merge($allUserRank, $exam->showRankTable($examid));

            
          
        }

        // dd($allUserRank);

        //loop for each classid rank
        foreach($totalClass as $classid) {

           
            $oneClassEachExamRank = array_merge($oneClassEachExamRank,$exam->getExamlistByClassID($classid->class_id));
            $oneClassRank = array_merge($oneClassRank,$exam->getUserRankById($classid->class_id));
        }
      
      
        


       
        //filter for get only current login user id
        $examRank = array_filter($allUserRank, function ($rank) {
            return ($rank->id == Auth::id());
        });

         //filter for get only current login user id
         $eachExamRank = array_filter($oneClassEachExamRank, function ($rank) {
            
            return ($rank->uid == Auth::id());
        });
   
       
        $newArray = array_values($eachExamRank);
        

        for ($i=0; $i < count($newArray); $i++) { 
               if(!in_array($newArray[$i]->cid,$allClassID)){
                array_push($allClassID,$newArray[$i]->cid);
               }
        }

        for ($i=0; $i <count($allClassID) ; $i++) { 
             $temp = [];
             for ($j=0; $j < count($newArray) ; $j++) { 
                if($allClassID[$i] == $newArray[$j]->cid){
                    array_push($temp,$newArray[$j]);
                }
             }

                array_push($oneExamCallRank,$temp);
        }

       

       

        

     
       
        //get all user rank
        $userRanks = $exam->getUserRank();

        //filter for get only current login user id
        $userRank = array_filter($userRanks, function ($ranking) {
            return ($ranking->id == Auth::id());
        });

        // dd($userRank);

        //filter for get overall rank only current login user id
        $overallRank = array_filter($oneClassRank,function($ranking) {
            return ($ranking->id == Auth::id());
        });

       
      

      

       foreach($totalClass  as $class){
          array_push($allClass,$class->id);
       }
         
       $classid =  join(',',$allClass);
       
      $eachClass =   $classes->totalStudents($classid);
        return inertia("Home", [
            'classes' => $totalClass,
            'attendance' => $attendance,
            'examRanks' => $examRank,
            'rank_mark' => $userRank,
            'all_ranks' => $userRanks,
            'one_class' => $eachClass,
            'exam_percent' =>  $examPercent,
            'overall_rank' => $overallRank,
            'class_rank'  => $oneExamCallRank

        ]);
    }


    public function changeClass(Request $request){

       
            $classes = new MClass();
               $class   =  $classes->classById($request->classid);
    

        return $class;
    }
}
