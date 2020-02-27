<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function create()
    {
      return view('blogs.create');
    }

    public function store()
    {
      $data = request()->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'image|nullable|max:1999',
      ]);

      //Image Handling code
      if (request()->has('image')) {

        $fileNameWithExt = request()->file('image')->getClientOriginalName();

        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // makes file extension in variable
        $extension = request()->file('image')->getClientOriginalExtension();
        //Creates Unique File Name
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        // Shows the path were image will be stored
        $path = request()->file('image')->storeAs('public/uploads', $fileNameToStore);
        //Saves picture in Database
        $data['image'] = $fileNameToStore;
      } else {
        //Sets default pic if user are not uploading pic
        $data['image'] = "default.jpg";
      }
      //Stores validated data in DB and returns view
       $blog  = auth()->user()->blogs()->create($data);
      return redirect('/blogs/'.$blog->id);
    }

    public function show(Blog $blog)
    {
      $user = auth()->user();
      return view('blogs.show', compact('blog', 'user'));
    }



}
