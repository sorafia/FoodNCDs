<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

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