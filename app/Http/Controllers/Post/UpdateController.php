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
    public function update(Post $post){
        $data = request()->validate([
            "title"=> "string",
            "body"=> "string",
            "image"=> "string",
        ]);
        $post->update($data);

        $comments = Comments::all();
        foreach($comments as $comment){
            if ($comment->post_id == $post->id){
                $post_comments[] = $comment;
            }
        }   

        $users = User::all();

        return view('post.show', compact('post', 'post_comments', 'users'));
    }
}
