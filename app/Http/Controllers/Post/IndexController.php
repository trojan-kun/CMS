<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class IndexController extends Controller
{
    public function index(){
        $posts = Post::all();
        $users = User::all();
        return view('post.index', compact('posts','users'));
    }
}
