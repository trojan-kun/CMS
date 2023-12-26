<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class EditController extends Controller
{
    public function Edit(Post $post){
      return view('admin.post.edit', compact('post'));
    }
}