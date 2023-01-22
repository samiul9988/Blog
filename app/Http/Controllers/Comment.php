<?php

namespace App\Http\Controllers;
use app\Models\Post;

use Illuminate\Http\Request;

class Comment extends Controller
{
    public function index()
    {
        $posts = Post::with(['likes','likes.user'])->paginate(10);
        // dd($posts);
        return $posts;
        return view('like', compact('posts'));
    }
}
