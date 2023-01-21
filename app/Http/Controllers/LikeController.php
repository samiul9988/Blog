<?php

namespace App\Http\Controllers;

use App\Models\Like;
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

    }
}
