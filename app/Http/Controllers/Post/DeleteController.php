<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class DeleteController extends Controller
{
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');
    }
}
