<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate();

        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'body' => '',
            'photo' => 'mimes:jpeg,jpg,png',
            'tags' => 'required'
        ]);

        if (request()->file('photo')) {
            $photo = request()->file('photo')->store('photos');
        } else {
            $photo = null;
        }

        $tags = explode(',',request()->tags);

        $post = Blog::create([
            'title' => request()->title,
            'slug' => str_slug(request()->title),
            'description' => request()->description,
            'body' => request()->body,
            'photo' => $photo,
        ]);

        $post->syncTags($tags);

        return redirect('/admin/blog');
    }
}
