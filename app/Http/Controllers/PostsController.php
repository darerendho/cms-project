<?php

namespace App\Http\Controllers;

use App\Post; //to import Post Table
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostsController extends Controller
{
      //Must sign in to create a post
      public function __construct(){
        $this->middleware('auth')->except(['index','show']);  //Dont need auth for these views
      }

    public function index(){


      $posts = Post::latest()
      ->month(request(['month','year']))
      ->get();

      //$archives = Post::archives();

      return view('posts.index',compact('posts'));
    }


    public function create(){
      return view('posts.create');
    }


    public function store(){
      //Validate input
      $this->validate(request(),[
        'title' => 'required',
        'body'=> 'required'
      ]);
        // Create a new using the request data and save to database
        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        session()->flash('message','Your post has now been published');

        //And then redirect to home page.
        return redirect('/');
    }

    public function show(Post $post){

        return view('posts.show',compact('post'));

    }
}
