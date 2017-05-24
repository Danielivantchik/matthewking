<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use App\Invite;
use App\Schedule;
use Spatie\Tags\Tag;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
    public function index()
    {
        return view('theme.index');
    }

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

    public function blogDetails($slug)
    {
        $post = Blog::whereSlug($slug)->firstOrFail();

        $tags = Tag::all();

        return view('theme.blog_details', compact('post', 'tags'));
    }

    public function invite()
    {
        return view('theme.invite');
    }

    public function storeInvite()
    {
        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'description' => 'required|min:5'
        ]);

        Invite::create([
            'name' => ucwords(request()->name),
            'phone' => request()->phone,
            'email' => request()->email,
            'description' => request()->description
        ]);
        // @todo send email.
        return redirect()->route('invite')->with('message', 'Thank you for the invitation, we will contact you soon.');
    }

    public function contact()
    {
        $user = User::first();

        return view('theme.contact', compact('user'));
    }

    public function sendEmail()
    {
        return request()->all();
        // @todo send email
    }

    public function schedule()
    {
        $schedules = Schedule::where('visible', 1)->get();

        return view('theme.schedule', compact('schedules'));
    }
}
