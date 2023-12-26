<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class IndexController extends Controller
{
    public function index(){
        $posts = Post::all();
        $users = User::all();

        return view('admin.post.index', compact('posts','users'));
    }
}
