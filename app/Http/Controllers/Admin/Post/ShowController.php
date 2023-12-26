<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\postController;
use App\Models\Post;
use App\Models\User;
use App\Models\Comments;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(Post $post){
      $comments = Comments::all();
      foreach($comments as $comment){
        if ($comment->post_id == $post->id){
          $post_comments[] = $comment;
        }
      }

      $users = User::all();
      
      return view("admin.post.show", compact('post', 'post_comments', 'users'));
    }
}
