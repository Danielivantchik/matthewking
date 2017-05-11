<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SocialMediaController extends Controller
{
    public function index()
    {
        return view('admin.social.index');
    }

    public function update()
    {
        $data = request()->only('facebook','instagram','twitter');

        auth()->user()->update($data);

        return redirect()->back();
    }
}
