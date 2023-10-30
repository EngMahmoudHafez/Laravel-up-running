<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {

        $blogs = DB::table("blogs")
            ->select('title', 'content', 'plan')
            ->where('is_plan_owner', '=', '1')->get();
        return view('blogs.show')->with('myblogs', $blogs);
    }
}
