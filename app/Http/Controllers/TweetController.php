<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateTweet;
use App\Models\Tweet;
use App\Models\TweetStatistics;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::with('comments')->orderBy('id', 'desc')->get();
        return view('feed', compact('tweets'));
    }

    public function store(StoreUpdateTweet $request, Tweet $tweet)
    {
        $tweet->content = $request->get('content');
        $tweet->user_id = 2; // temporario. aqui devera recuperar o id do usuario autenticado.

        $tweet->save();
        return redirect()->route('tweet.index')->with('success', 'Tweet postado!');
    }

    public function show(Tweet $tweet)
    {
        return view('components.tweets.show', compact('tweet'));
    }

    public function edit(Tweet $tweet)
    {
        $editing = true;

        return view('components.tweets.edit', compact('tweet', 'editing'));
    }

    public function update(StoreUpdateTweet $request, Tweet $tweet)
    {
        $tweet->content = $request->input('content');
        $tweet->save();

        return redirect()->route('tweet.show', $tweet->id)->with('success', 'Tweet atualizado com sucesso!');
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->delete();
        return redirect()->route('tweet.index')->with('success', 'Tweet deletado!');
    }

    public function like(TweetStatistics $tweetsstatistics)
    {
        // o like devera ser realizado por determinado usuario em determinado tweet. ira registrar o like (+1)
        // quem deu o like (user_id) e qual tweet recebeu o like (tweet_id)
        dd($tweetsstatistics);
    }

    public static function getTimeDifference(Carbon $created_at): string
    {
        $difference = Carbon::now()->diffInSeconds($created_at);

        if ($difference < 60) {
            return "Postado há $difference segundos atrás";
        } elseif ($difference < 3600) {
            $minutes = floor($difference / 60);
            return "Postado há $minutes minuto" . ($minutes > 1 ? 's' : '') . " atrás";
        } elseif ($difference < 86400) {
            $hours = floor($difference / 3600);
            return "Postado há $hours hora" . ($hours > 1 ? 's' : '') . " atrás";
        } else {
            $days = floor($difference / 86400);
            return "Postado há $days dia" . ($days > 1 ? 's' : '') . " atrás";
        }
    }
}
