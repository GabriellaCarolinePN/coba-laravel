<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            // "posts" => Post::all(), //urutannya berdasar ID
            "posts" => Post::with(['author', 'category'])->latest()->get(), //urutannya dr data yang terakhir dimasukan 
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post,
        ]);
    }
}
