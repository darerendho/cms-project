<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{


    public function addComment(Post $post){

        //Validate Comments
        $this->validate(request(),['body'=>'required|min:2']);

        //To model Post.php
        $post->addComment(request('body'));
     // Comment::create([
    //    'body'=>request('body'),
    //    'post_id'=>$post->id
    //  ]);

      return back();
    }
}
