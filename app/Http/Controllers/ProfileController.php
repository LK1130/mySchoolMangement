<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Spatie\Backtrace\File;

class ProfileController extends Controller
{


    public function index()
    {


        $query = User::where('id', Auth::id())
            ->where('del_flg', 0)
            ->get();

        return inertia('Profile', [
            'user' => $query
        ]);
    }


    public function update(Request $request)
    {


        $user  = User::find(Auth::id());

        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->age = $request->age;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->bio = $request->bio;

        $img = $request->image;

        $imgName = $img->storePublicly('ProfilePhoto', ['disk' => 'public']);
        // $imgName = $img->store('storage/ProfilePhoto');
        $user->profile_photo_path = $imgName;
        $user->save();

        return Redirect::route('profile.index');
    }
}
