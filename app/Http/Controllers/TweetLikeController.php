<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetLikeController extends Controller
{
    public function store(Tweet $tweet)
    {
        $tweet->like(auth()->user());

        return back();
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->dislike(auth()->user());

        return back();
    }
}
