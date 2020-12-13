<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class PreachController extends Controller
{
    public function index()
    {
        return view('preach.index');
    }

    public function store(Request $request)
    {


        if(!Newsletter::isSubscribed($request->email)){
            Newsletter::subscribePending($request->email);

            return redirect('/preach')->with('success', 'A confirmation email has been send! 
            Please follow the steps in the email to confirm your subscription.');
        }

        return redirect('/preach')->with('failure', 'Whoops, you are already subscribed!');
    }
}
