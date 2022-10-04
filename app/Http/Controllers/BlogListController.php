<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogListController extends Controller
{
    public function index()
    {
        return inertia('Blog');
    }
}
