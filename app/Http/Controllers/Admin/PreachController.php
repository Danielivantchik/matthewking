<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Newsletter\MailChimp\Newsletter as Newsletter;

class PreachController extends Controller
{
    public function index()
    {
        return view('preach.index');
    }

    public function store(Request $request)
    {
//        if(!Newsletter::isSubscribed(Request $request)){
//
//    }
    }
}