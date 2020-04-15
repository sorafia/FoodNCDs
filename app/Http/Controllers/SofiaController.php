<?php

namespace App\Http\Controllers;


class SofiaController extends Controller
{
    public function index()
    {
        return view('calories.cal');
    }
    
    public function profile()
    {
        return view('calories.informationform');
    }

    public function food()
    {
        return view('calories.informationform');
    }

    public function blogdetail()
    {
        return view('calories.blog_detail');
    }
}
