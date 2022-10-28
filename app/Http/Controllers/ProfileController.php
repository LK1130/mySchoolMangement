<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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


    public function update(Request $request){


        $user  = User::find(Auth::id());

        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->age = $request->age;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->bio = $request->bio;
        $user->save();

        return Redirect::route('profile.index');
    }
}
