<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
            'description' => '',
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
            'title' => ucfirst(request()->title),
            'slug' => str_slug(request()->title),
            'description' => request()->description,
            'body' => request()->body,
            'photo' => $photo,
        ]);

        $post->syncTags($tags);

        return redirect('/admin/blog');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        $tags = $blog->tags->pluck('name')->toArray();
        $tags = implode(',',$tags);

        return view('admin.blog.edit', compact('blog', 'tags'));
    }

    public function deletePhoto($id)
    {
        $blog = Blog::findOrFail($id);

        $photo = $blog->photo;
        Storage::delete($photo);
        $blog->photo = null;
        $blog->save();

        return redirect()->back();
    }

    public function update($id)
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => '',
            'body' => '',
            'photo' => 'mimes:jpeg,jpg,png',
            'tags' => 'required'
        ]);

        $blog = Blog::findOrFail($id);
        if (request()->file('photo')) {
            $photo = request()->file('photo')->store('photos');
        } else {
            $photo = $blog->photo;
        }

        $tags = explode(',',request()->tags);

        $blog->update([
            'title' => ucfirst(request()->title),
            'slug' => str_slug(request()->title),
            'description' => request()->description,
            'body' => request()->body,
            'photo' => $photo,
        ]);

        $blog->syncTags($tags);

        return redirect('/admin/blog');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->detachTags($blog->tags->pluck('name')->toArray());
        if($blog->photo != null) {
            Storage::delete($blog->photo);
        }

        $blog->delete();

        return redirect()->route('blog.index');
    }
}
