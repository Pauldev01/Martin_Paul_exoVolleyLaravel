<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        $teams = Team::all();
        $photos = Photo::all();
        return view('pages.team.teams', compact('players', 'teams', 'photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $newEntry = new Team;
        $newEntry->name = $request->name;
        $newEntry->city = $request->city;
        $newEntry->country = $request->country;
        $newEntry->max_player = $request->max_player;
        $newEntry->max_front = $request->max_front;
        $newEntry->max_back = $request->max_back;
        $newEntry->max_center = $request->max_center;
        $newEntry->max_replace = $request->max_replace;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Team::find($id);
        $players = Player::where('team_id', '=', $id)->get();
        $photos = Photo::all();
        return view('pages.team.show', compact('show', 'players', 'photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = Team::find($id);
        return view('pages.team.edit', compact('show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateEntry = Team::find($id);
        $updateEntry->name = $request->name;
        $updateEntry->city = $request->city;
        $updateEntry->country = $request->country;
        $updateEntry->max_player = $request->max_player;
        $updateEntry->max_front = $request->max_front;
        $updateEntry->max_back = $request->max_back;
        $updateEntry->max_center = $request->max_center;
        $updateEntry->max_replace = $request->max_replace;
        $updateEntry->save();
        return redirect('/teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Team::find($id);
        // dd($destroy->players);
        foreach ($destroy->players as $player) {
            $player->team_id = NULL;
            $player->save();
        }
        $destroy->delete();
        return redirect('/teams');
    }
}
