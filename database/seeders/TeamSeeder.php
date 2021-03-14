<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('teams')->insert(
           [
               [
                "name"=>"Municipal Fire Fighter SeaShell's",
                "city"=>"Charleroi",
                "country"=>"Belgium",
                "max_player"=>"10",
                "max_front"=>"2",
                "max_back"=>"2",
                "max_center"=>"4",
                "max_replace"=>"2"
               ],
               [
                "name"=>"Pile-Driver Operator Cornsilk's",
                "city"=>"Caracas",
                "country"=>"Venezuela",
                "max_player"=>"12",
                "max_front"=>"3",
                "max_back"=>"3",
                "max_center"=>"4",
                "max_replace"=>"2"
               ],
               [
                "name"=>"Inspector Brown's",
                "city"=>"Manille",
                "country"=>"Philippines",
                "max_player"=>"9",
                "max_front"=>"1",
                "max_back"=>"2",
                "max_center"=>"4",
                "max_replace"=>"2"
               ],
               [
                "name"=>"Flight Attendant Olive's",
                "city"=>"Rovaniemi",
                "country"=>"Finland",
                "max_player"=>"11",
                "max_front"=>"2",
                "max_back"=>"2",
                "max_center"=>"4",
                "max_replace"=>"3"
               ],
               [
                "name"=>"Mechanical Door Repairer SpringGreen's",
                "city"=>"Gondar",
                "country"=>"Ethiopia",
                "max_player"=>"8",
                "max_front"=>"1",
                "max_back"=>"1",
                "max_center"=>"4",
                "max_replace"=>"2"
               ],
               [
                "name"=>"Horticultural Worker Gold's",
                "city"=>"Baie St Anne",
                "country"=>"Seychelles",
                "max_player"=>"11",
                "max_front"=>"2",
                "max_back"=>"2",
                "max_center"=>"3",
                "max_replace"=>"2"
               ],
               [
                "name"=>"Gaming Service Worker Antique White's",
                "city"=>"Vaiaku",
                "country"=>"Tuvalu",
                "max_player"=>"9",
                "max_front"=>"2",
                "max_back"=>"2",
                "max_center"=>"4",
                "max_replace"=>"1"
               ],
               [
                "name"=>"Protective Service Worker DarkTurquoise",
                "city"=>"Tirana",
                "country"=>"Albania",
                "max_player"=>"7",
                "max_front"=>"1",
                "max_back"=>"1",
                "max_center"=>"3",
                "max_replace"=>"2"
               ],
               [
                "name"=>"Biomedical Engineer LightGoldenRodYellow",
                "city"=>"Saint Marin",
                "country"=>"San Marino",
                "max_player"=>"10",
                "max_front"=>"2",
                "max_back"=>"2",
                "max_center"=>"3",
                "max_replace"=>"3"
               ],
               [
                "name"=>"Refrigeration Mechanic PaleTurquoise",
                "city"=>"Barcelona",
                "country"=>"Spain",
                "max_player"=>"4",
                "max_front"=>"1",
                "max_back"=>"1",
                "max_center"=>"1",
                "max_replace"=>"1"
               ],
           ]
        );
    }
}
