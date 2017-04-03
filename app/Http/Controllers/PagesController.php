<?php

namespace App\Http\Controllers;

use App\Blog;

class PagesController extends Controller
{
    public function index()
    {
        return view('theme.index');
    }

    public function blog()
    {
        $posts = Blog::latest()->paginate();

        return view('theme.blog', compact('posts'));
    }

    public function blogDetails($slug)
    {
        $post = Blog::whereSlug($slug)->firstOrFail();

        return view('theme.blog_details', compact('post'));
    }
}
