<?php

namespace App\Http\Controllers;

use App\Models\MClass;
use App\Models\TStudentAttendance;
use App\Models\TStudentClass;
use App\Models\TStudentExam;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Js;
use PhpParser\Node\Expr\Cast\Object_;
use PhpParser\Node\Expr\FuncCall;
use SebastianBergmann\Timer\Duration;

class HomeController extends Controller
{
   
   
    public function index()
    {
        
            if ($this->OTPorHomePage()) {
            return redirect('otp');
        } else {
             
        $classes = new TStudentClass();
        $exam   = new TStudentExam();
        $attendances = new TStudentAttendance();

        $allUserRank = [];
        $allClass = [];

        $currentLiveClassTimeArray = [];
        $durationClass = [];
        $processBar = [];
        $oneExamCallRank = [];

        
        //all rank by classid
        $userRanks = [];
       
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
        
      
       
        // dd($attendance);
        // dd($examPercent) ;    
        //get Exam list
        $examList = $exam->getExamList();
        
        //get Class List
        $totalClass = $classes->totalClass(Auth::id());
        
       
       
        
        
            
       
        //loop for each examid 
        foreach ($examList as  $examid) {
            //collect all data to array


                $allUserRank = array_merge($allUserRank, $exam->showRankTable($examid));
            }

         

      


        //loop for each classid rank
        foreach($totalClass as $classid) {

           
            $oneClassEachExamRank = array_merge($oneClassEachExamRank,$exam->getExamlistByClassID($classid->class_id));
            $oneClassRank = array_merge($oneClassRank,$exam->getUserRankById($classid->class_id));
            
            
            $start_date= date_create($classid->c_start_date);
            $end_date =  date_create($classid->c_end_date);
         
            
            $date = Carbon::now();
            $today = date_create($date);
          
            
            $duration = date_diff($start_date,$end_date);
            $currentLiveClassTime = date_diff($start_date,$today);
           
           
            array_push($durationClass,$duration->format("%m"));
            array_push($currentLiveClassTimeArray,$currentLiveClassTime->format("%m"));
            
            $process = array(
                'period' => $duration->format("%m"),
                'current' => $currentLiveClassTime->format("%m")
            );
            array_push($processBar,$process);
       

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


            for ($i = 0; $i < count($newArray); $i++) {
                if (!in_array($newArray[$i]->cid, $allClassID)) {
                    array_push($allClassID, $newArray[$i]->cid);
                }
            }

            for ($i = 0; $i < count($allClassID); $i++) {
                $temp = [];
                for ($j = 0; $j < count($newArray); $j++) {
                    if ($allClassID[$i] == $newArray[$j]->cid) {
                        array_push($temp, $newArray[$j]);
                    }
                }

                array_push($oneExamCallRank, $temp);
            }

     

        //filter for get overall rank only current login user id
        $overallRank = array_filter($oneClassRank,function($ranking) {
            return ($ranking->uuid == Auth::id());
        });

       
  

            //get all user rank
           

       foreach($totalClass  as $class){
          array_push($allClass,$class->id);
          
          array_push($userRanks, $exam->getUserRank($class->id));
       }
        
       $classid =  join(',',$allClass);

       
       if($classid) $eachClass =   $classes->totalStudents($classid);
       else $eachClass =[];
    
   
        return inertia("Home", [
            'classes' => $totalClass,
            'attendance' => $attendance,
            'examRanks' => $examRank,
            'all_ranks' => $userRanks,
            'one_class' => $eachClass,
            'exam_percent' =>  $examPercent,
            'overall_rank' => $overallRank,
            'class_rank'  => $oneExamCallRank,
            'processBar' => $processBar
          
            ]);
       
        }
        }
    


    public function changeClass(Request $request)
    {


        $classes = new MClass();
        $class   =  $classes->classById($request->classid);


        return $class;
    }


    public function OTPorHomePage()
    {
        $reset =  User::where("del_flg", 0)
            ->where("id", Auth::id())
            ->pluck("reset")
            ->first();
        return $reset;
    }

    public function changePassword(Request $request)
    {
        //check password 
        $request->validate([
            "password" => "required|confirmed|min:8|max:255"
        ]);
        //set new password
        DB::table('users')
        ->where("id",Auth::id())
        ->update([
            "password" => Hash::make($request->password),
            "reset" =>0
        ]);
        return redirect("/homepage");
    }

    




}
