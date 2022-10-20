<?php

namespace App\Http\Controllers;

use App\Models\TMail;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index($category = "")
    {
        $query = TMail::where("del_flg", 0)
        ->where('user_id', Auth::id())
        ->orderby("created_at","desc");
        $query->when(!empty($category), function ($query) use ($category) {
            return  $query->whereIn("m_category",  explode(',', $category));
        });
        $messages = $query->paginate(10);
        
        return inertia('Inbox', ['messages' => $messages,"checked" =>  explode(',', $category)]);
    }
}
