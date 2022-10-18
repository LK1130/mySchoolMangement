<?php

namespace App\Http\Controllers;

use App\Models\TMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index($category)
    {

        $messages = TMail::when($category != "all", 
        function ($query, $category) {
            $query->where("m_category", $category);
        })
            ->where("del_flg", 0)
            ->where('user_id', Auth::id())
            ->paginate(10);
        return inertia('Inbox', ['messages' => $messages]);
    }
}
