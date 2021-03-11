<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function edit($id)
    {
        $show = Player::find($id);
        $teams = Team::all();
        $photos = Photo::find($show->photo_id);
        return view('pages.player.edit', compact('show', 'photos', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateEntry = Player::find($id);
        $img = Photo::find($updateEntry->photo_id);
        if ($img->src != 'photo.jpg') {
            Storage::disk('public')->delete('img/'.$img->src);
            $request->file('src')->storePublicly('img/', 'public');
            $img->src = $request->file('src')->hashName();
        } else {
            $request->file('src')->storePublicly('img/', 'public');
            $imgNew = new Photo;
            $imgNew->src = $request->file('src')->hashName();
            $imgNew->save();
        }
        $img->save();

        $updateEntry->name = $request->name;
        $updateEntry->surname = $request->surname;
        $updateEntry->age = $request->age;
        $updateEntry->phone = $request->phone;
        $updateEntry->email = $request->email;
        $updateEntry->gender = $request->gender;
        $updateEntry->country = $request->country;
        $updateEntry->team_id = $request->team_id;
        $updateEntry->position = $request->position;
        $updateEntry->photo_id = $imgNew->id ? $imgNew->id : $img->id;
        
        $updateEntry->save();
        return redirect('/players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Player::find($id);
        $destroyImg = Photo::find($destroy->photo_id);
        if($destroyImg->src != 'photo.jpg')
        {
            Storage::disk('public')->delete('img/'.$destroyImg->src);
            $destroy->delete();
            $destroyImg->delete();
        }
        $destroy->delete();
        return redirect('/players');
    }
}
