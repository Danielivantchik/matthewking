<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contact.index');
    }

    public function update()
    {
        auth()->user()->update([
            'phone' => request()->phone,
            'address' => request()->address,
            'longitude' => request()->longitude,
            'latitude' => request()->latitude,
        ]);

        return redirect()->back();
    }
}
