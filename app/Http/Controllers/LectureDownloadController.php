<?php

namespace App\Http\Controllers;

use App\Models\MVideo;
use App\Models\TLectureNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LectureDownloadController extends Controller
{
    //

    public function download(Request $request){

        $lectures    = new TLectureNote();
        
        $lectureLink = $lectures->downloadLinkById($request->id);
    
  
        $path =  $lectureLink->l_storage_link;
        $fileName = $lectureLink->l_name;
      
        
        $pdf = file_get_contents($path);
Storage::disk('local')->put($fileName.'.pdf', $pdf);
return response()->download(storage_path()."/app/$fileName.pdf")->deleteFileAfterSend(true);

        
    }
}
