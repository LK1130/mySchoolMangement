<?php

namespace App\Http\Controllers;

use App\Models\MContact;
use Illuminate\Http\Request;

class PublicHomeController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            "username" => ["required", "max:54"],
            "email" => ["required", "email", "max:128"],
            "message" => ["required", "min:10", "max:256"]
        ]);

        $contacts = new MContact();
        $contacts->contactUs($request);

        return redirect()->back();
    }
}
