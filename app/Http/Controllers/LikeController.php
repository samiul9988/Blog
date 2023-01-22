<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
       $like = new Like();
       $like->user_id = $request->user_id;
       $like->post_id = $request->post_id;

       $like->save();
       return back();

    }

    public function save(Request $request)
    {
        $comments = new Comment();
        $comments->user_id = $request->user_id;
        $comments->post_id = $request->post_id;
        $comments->message = $request->message;

        $comments->save();
        return back();
    }
    public function index()
    {
        $posts = Post::with(['likes','likes.user'])->paginate(10);
        // dd($posts);
        return $posts;
        return view('like', compact('posts'));
    }
}
