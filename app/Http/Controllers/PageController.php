<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class PageController extends Controller
{
    public function getBlogs() {
        
        $blogs = Blog::all();

        return view('frontend.blogs.index')
            ->with('blogs', $blogs);
    }

    public function getBlogDetail($slug) {

        $blog = Blog::where('slug', $slug)->first();

        return view('frontend.blogs.detail')
            ->with('blog', $blog);
    }
}
