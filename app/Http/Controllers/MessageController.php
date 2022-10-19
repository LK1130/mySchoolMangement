<?php

namespace App\Http\Controllers;

use App\Models\TMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index($category = "")
    {
        $query = TMail::where("del_flg", 0);

        $query->when(!empty($category), function ($query) use ($category) {
            $categoryArray = explode(',', $category);
            return  $query->whereIn("m_category", $categoryArray);
        });
        $messages = $query->paginate(10);

        return inertia('Inbox', ['messages' => $messages,"checked" =>  explode(',', $category)]);
    }
}
