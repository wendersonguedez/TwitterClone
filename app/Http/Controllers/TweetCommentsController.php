<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\TweetComments;
use Illuminate\Http\Request;

class TweetCommentsController extends Controller
{
    public function store(Tweet $tweet, Request $request)
    {
        $comment = new TweetComments();
        $comment->content = $request->input('comment');
        $comment->user_id = $tweet->user_id; // temporario. deverá pegar do usuário logado.
        $comment->tweet_id = $tweet->id;

        $comment->save();

        return redirect()->route('tweet.index')->with('success', 'Comentário enviado!');
    }
}
