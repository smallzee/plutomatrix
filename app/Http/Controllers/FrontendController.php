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
}
