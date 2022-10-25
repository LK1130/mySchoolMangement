<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    

    public function index(){

         
        $query = User::where('id',Auth::id())
        ->where('del_flg',0)
        ->get();
        
        return inertia('Profile',[
            'user' => $query
        ]);
    }
}
