<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Post;

class DeleteController extends Controller
{
    public function destroy(Post $post, Comments $comment){
        $comment->delete();
        return redirect()->route('post.comment.index');
    }
}
