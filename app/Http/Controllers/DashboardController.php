<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        $playersWith = Player::where('team_id', '!=', 1)->get();
        $playersWithout = Player::where('team_id', '=', 1)->get();
        $teams = Team::all();
        $teamMatch = Team::where('id', '>', 1)->get();
        $photos = Photo::all();

        // Player who play for their country
        $playerCountry = [];
        foreach ($playersWith as $player) {
            if ($player->country == $player->teams->country) {
                array_push($playerCountry, $player);
            }
        }

        return view('pages.dashboard', compact('players', 'teams', 'photos', 'playersWith', 'playersWithout', 'playerCountry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
