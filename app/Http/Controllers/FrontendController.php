<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index()
    {
        $page_title = "Home";
        return view('index',compact('page_title'));
    }

    public function packages()
    {
        $page_title = "Packages";
        return view('package',compact('page_title'));
    }

    public function services()
    {
        $page_title = "Services";
        return view('service',compact('page_title'));
    }
}
