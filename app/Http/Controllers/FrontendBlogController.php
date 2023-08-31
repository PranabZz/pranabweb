<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendBlogController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->get();

        return view('blogs',compact('blogs'));
    }

    public function show(Blog $blog){
        return view('show',compact('blog'));
    }
}
