<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        $teams = Team::where('id', '>', 1)->get();
        $photos = Photo::all();
        return view('pages.player.players', compact('players', 'teams', 'photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $players = Player::all();
        $teams = Team::all();
        $photos = Photo::all();
        return view('pages.player.create', compact('players', 'teams', 'photos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->src != null) {
            $store = new Photo;
            $store->src = $request->file('src')->hashName();
            $request->file('src')->storePublicly('img/', 'public');
            $store->save();
        }

        $newEntry = new Player;
        $newEntry->name = $request->name;
        $newEntry->surname = $request->surname;
        $newEntry->age = $request->age;
        $newEntry->phone = $request->phone;
        $newEntry->email = $request->email;
        $newEntry->gender = $request->gender;
        $newEntry->country = $request->country;
        $newEntry->team_id = $request->team_id;
        $newEntry->position = $request->position;
        if ($request->src != null) {
            $newEntry->photo_id = $store->id;
        } else {
            $newEntry->photo_id = 1;
        }
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Player::find($id);
        return view('pages.player.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        //
    }
}
