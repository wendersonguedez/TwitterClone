<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TweetCommentsController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', function () {
    return view('users.profile');
});

Route::get('/', [TweetController::class, 'index'])->name('tweet.index');

Route::post('/tweets/store', [TweetController::class, 'store'])->name('tweet.store');
Route::get('/tweets/{tweet}', [TweetController::class, 'show'])->name('tweet.show');
Route::get('/tweets/{tweet}/edit', [TweetController::class, 'edit'])->name('tweet.edit');
Route::post('/tweets/{tweet}/update', [TweetController::class, 'update'])->name('tweet.update');
Route::get('/tweet/{tweets_statistics}/like', [TweetController::class, 'like'])->name('tweet.like');

Route::post('/tweets/{tweet}/comment/store', [TweetCommentsController::class, 'store'])->name('tweet.comment.store');

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::delete('/tweets/{tweet}', [TweetController::class, 'destroy'])->name('tweet.destroy');
