<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\TweetLikeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('tweets.index'));
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', [TweetController::class, 'index'])->name('tweets.index');
    Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');

    Route::post('/tweets/{tweet}/like', [TweetLikeController::class, 'store'])->name('tweet.like');
    Route::delete('/tweets/{tweet}/like', [TweetLikeController::class, 'destroy'])->name('tweet.dislike');

    Route::post('/profiles/{user:username}/follow', [FollowController::class, 'store'])->name('profiles.follow');
});

Route::middleware(['auth', 'can:edit,user'])->group(function () {
    Route::get('/profiles/{user:username}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    Route::patch('/profiles/{user:username}', [ProfileController::class, 'update'])->name('profiles.update');
});

Route::get('/profiles/{user:username}', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/explore', ExploreController::class)->name('explore');

Auth::routes();
