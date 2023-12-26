<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comments;

class EditController extends Controller
{
    public function Edit(Comments $comment){
      return view('post.comment.edit', compact('$comment'));
    }
}