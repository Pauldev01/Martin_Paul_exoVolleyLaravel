<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Models\Photo;
use App\Models\Player;
use App\Models\Team;
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
    $players = Player::all();
    $teams = Team::where('id', '>', 1)->get();
    $photos = Photo::all();
    return view('welcome', compact('players', 'teams', 'photos'));
});

Route::resource('players', PlayerController::class);
Route::resource('teams', TeamController::class);