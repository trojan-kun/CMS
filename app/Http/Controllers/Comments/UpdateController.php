<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\ShowController;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comments;

class UpdateController extends Controller
{
    public function update(Comments $comment){
        $data = request()->validate([
            "post_id"=> "int",
            "author_id"=> "int",
            "body"=> "string",
            "image"=> "string",
        ]);
        $comment->update($data);

        $posts = Post::all();
        foreach($posts as $p){
            if ($comment->post_id == $p->id){
                $post = $p;
            }
        }   

        $users = User::all();

        return view('post.comment.show', compact('post', 'comment', 'users'));
    }
}
