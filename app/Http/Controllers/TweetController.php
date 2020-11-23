<?php

namespace App\Http\Controllers;

use App\Http\Requests\TweetStoreRequest;
use App\Models\Tweet;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store(TweetStoreRequest $request)
    {
        Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => $request->body
        ]);

        flash('Tweet published!')->success();

        return redirect(route('tweets.index'));
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->delete();

        flash('Tweet deleted!')->important();

        return redirect(route('tweets.index'));
    }
}
