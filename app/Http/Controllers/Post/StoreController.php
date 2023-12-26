<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class StoreController extends Controller
{
    public function store(){
        $data = request()->validate([
            "title"=> "string",
            "author_id"=> "int",
            "body"=> "string",
            "image"=> "string",
        ]);
        Post::create($data);

        return redirect()->route('post.index');
    }
}
