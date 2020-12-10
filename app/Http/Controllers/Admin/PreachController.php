<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//use Spatie\Newsletter\MailChimp\Newsletter;

class PreachController extends Controller
{
    public function index()
    {
        return view('preach.index', compact('preach'));
    }

//    public function store(Request $request)
//    {
//        if(!Newsletter::isSubscribed(Request $request)){
//
//    }
//    }
}
