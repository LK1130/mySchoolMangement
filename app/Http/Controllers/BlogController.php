<?php

namespace App\Http\Controllers;

use App\Models\MBlog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * get blog list
     */
    public function index()
    {
        $blogs = MBlog::where("del_flg", 0)
        ->paginate(5);
        return inertia
        ('Blog', ['blogs' => $blogs]);
        
    }

    /**
     * show blog
     */
    public function show( $id){
        $blog = MBlog::where("id", $id)->first();
        if (!$blog) abort(404);
        return inertia('BlogView', ['blog' => $blog]);
    }
}
