<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){

      return view('posts.index');
    }

    public function createpost(){
      return view('posts.create');
    }

    public function store(){

        // Create a new using the request data and save to database
        Post::create([
            'title'=>request('title'),
            'body'=>request('body')
        ]);
        //And then redirect to home page.
        return redirect('/');


    }
}
