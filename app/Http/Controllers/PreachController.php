<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter as Newsletter;

class PreachController extends Controller
{
    public function index()
    {
        return view('preach.index');
    }

    public function store(Request $request)
    {
        $newsletter = new \Spatie\Newsletter\Newsletter;

        if(!$newsletter->isSubscribed($request->email)){
            $newsletter->subscribePending($request->email);

            return redirect('/')->with('succes', 'You have successfully subscribed 
            for more information about Preach.');
        }

        return redirect('/')->with('failure', 'Sorry, you are already subscribed.');
    }
}
