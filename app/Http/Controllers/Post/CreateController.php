<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class CreateController extends Controller
{
    public function create(){
        
        return view('post.create');
    }
}
