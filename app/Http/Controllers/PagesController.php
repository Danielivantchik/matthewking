<?php

namespace App\Http\Controllers;

use App\Blog;
use Spatie\Tags\Tag;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('theme.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blog()
    {
        if($tag = request()->get('tag')) {
            $posts = Blog::withAnyTags([$tag])->latest()->paginate();
        } else {
            $posts = Blog::latest()->paginate();
        }
        $tags = Tag::all();
        return view('theme.blog', compact('posts', 'tags'));
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blogDetails($slug)
    {
        $post = Blog::whereSlug($slug)->firstOrFail();

        return view('theme.blog_details', compact('post'));
    }
}
