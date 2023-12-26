<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comments;

class StoreController extends Controller
{
    public function store(){
        $data = request()->validate([
            "post_id"=> "int",
            "author_id"=> "int",
            "body"=> "string",
            "image"=> "string",
        ]);
        Comments::create($data);

        return redirect()->route('post.comment.index');
    }
}
