<?php

use App\Http\Controllers\FollowController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
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

    Route::resource('tweets', TweetController::class)->only([
        'index', 'store'
    ]);

});

Route::resource('profiles', ProfileController::class)
    ->parameters([
    'profiles' => 'user:name'
])
    ->only([
    'show', 'edit', 'update'
]);

Route::post('/profiles/{user:name}/follow', [FollowController::class, 'store'])->name('profiles.follow');

Auth::routes();
