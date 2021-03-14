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

        // Full teams
        $fullTeam = [];
        foreach ($teams as $item) {
            if (count($players->where('team_id', $item->id)) == $item->max_player) {
                array_push($fullTeam, $item);
            }
        }

        // Empty teams
        $emptyTeam = [];
        foreach ($teams as $item) {
            if (count($players->where('team_id', $item->id)) == 0) {
                array_push($emptyTeam, $item);
            }
        }

        // Team EU
        $euTeams = [];
        $euCountry = ['Austria', 'Belgium', 'Bulgaria', 'Croatia', 'Republic of Cyprus', 'Czech Republic', 'Denmark', 'Estonia', 'Finland', 'France', 'Germany', 'Greece', 'Hungary', 'Ireland', 'Italy', 'Latvia', 'Lithuania', 'Luxembourg', 'Malta', 'Netherlands', 'Poland', 'Portugal', 'Romania', 'Slovakia', 'Slovenia', 'Spain', 'Sweden'];
        foreach ($teams as $team) {
            foreach ($euCountry as $eu) {
                if($team->country == $eu) {
                    array_push($euTeams, $team);
                }
            }
        }

        // Team outside EU
        // $outEuTeams = $teamMatch->filter(function($value, $euTeams){
        //     return $value != $euTeams[0]->name || $value != $euTeams[1]->name || $value != $euTeams[2]->name;
        // });
        // // foreach ($teamMatch as $team) {
        //     foreach ($euCountry as $eu) {
        //         // dd($eu);
        //         if($team->name != $eu) {

        //             array_push($outEuTeams, $team);
        //         } else {
        //         }
        //     }
        // }

        // dd($outEuTeams);

        return view('pages.dashboard', compact('players', 'teams', 'photos', 'playersWith', 'playersWithout', 'playerCountry', 'fullTeam', 'emptyTeam', 'euTeams', 'teamMatch'));
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
