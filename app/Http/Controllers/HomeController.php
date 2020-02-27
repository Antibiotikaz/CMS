<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Blog;

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
      //Sorts post by user ID or can be modified to show all post to all users
      $blogs = Blog::where('user_id', auth()->user()->id)->get();

        return view('home', compact('blogs'));
    }




}
