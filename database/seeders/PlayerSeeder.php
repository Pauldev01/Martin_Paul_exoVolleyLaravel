<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
                "name"=>"Gusikowski",
                "surname"=>"Mattie",
                "age"=>"33",
                "phone"=>"+9612846646256",
                "email"=>"janice89@hotmail.com",
                "gender"=>"female",
                "country"=>"French Polynesia",
                "position"=>"front",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Wiegand",
                "surname"=>"Kenna",
                "age"=>"30",
                "phone"=>"+4003885527171",
                "email"=>"stokes.ada@kiehn.com",
                "gender"=>"male",
                "country"=>"Niue",
                "position"=>"front",
                "team_id"=>"2",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Thiel",
                "surname"=>"Guiseppe",
                "age"=>"26",
                "phone"=>"+3953452651576",
                "email"=>"jsporer.chanelle@hotmail.com",
                "gender"=>"female",
                "country"=>"Syrian Arab Republic",
                "position"=>"replace",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Gusikowski",
                "surname"=>"Mattie",
                "age"=>"33",
                "phone"=>"+9612846646256",
                "email"=>"janice89@hotmail.com",
                "gender"=>"female",
                "country"=>"French Polynesia",
                "position"=>"front",
                "team_id"=>"9",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Nitzsche",
                "surname"=>"Jordyn",
                "age"=>"17",
                "phone"=>"+1825424672750",
                "email"=>"ihackett@kovacek.com",
                "gender"=>"male",
                "country"=>"Belgium",
                "position"=>"back",
                "team_id"=>"11",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Carroll",
                "surname"=>"Berniece",
                "age"=>"30",
                "phone"=>"+1327324054522",
                "email"=>"pauline.welch@hotmail.com",
                "gender"=>"female",
                "country"=>"Canada",
                "position"=>"center",
                "team_id"=>"3",
                "photo_id"=>"1"
            ],
            [
                "name"=>"West",
                "surname"=>"Simeon",
                "age"=>"33",
                "phone"=>"+6826821688968",
                "email"=>"sunny05@yahoo.com",
                "gender"=>"male",
                "country"=>"Finland",
                "position"=>"front",
                "team_id"=>"4",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Rosenbaum",
                "surname"=>"Noemie",
                "age"=>"18",
                "phone"=>"+9557939326892",
                "email"=>"florence46@hintz.biz",
                "gender"=>"female",
                "country"=>"Moldova",
                "position"=>"replace",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Collier",
                "surname"=>"Forrest",
                "age"=>"36",
                "phone"=>"+5672299425154",
                "email"=>"rosanna57@borer.com",
                "gender"=>"male",
                "country"=>"Thailand",
                "position"=>"center",
                "team_id"=>"8",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Abernathy",
                "surname"=>"Felicity",
                "age"=>"40",
                "phone"=>"+4156041703837",
                "email"=>"freddy.schiller@yahoo.com",
                "gender"=>"female",
                "country"=>"Aruba",
                "position"=>"front",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Muller",
                "surname"=>"Elenor",
                "age"=>"30",
                "phone"=>"+5455040858363",
                "email"=>"maggio.adrien@hotmail.com",
                "gender"=>"male",
                "country"=>"Mozambique",
                "position"=>"back",
                "team_id"=>"4",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Hettinger",
                "surname"=>"Elton",
                "age"=>"22",
                "phone"=>"+1643249758116",
                "email"=>"mayert.jeramy@yahoo.com",
                "gender"=>"male",
                "country"=>"Russian Federation",
                "position"=>"center",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Parisian",
                "surname"=>"Mathilde",
                "age"=>"31",
                "phone"=>"+9957345307729",
                "email"=>"frederique90@hotmail.com",
                "gender"=>"female",
                "country"=>"Turkey",
                "position"=>"replace",
                "team_id"=>"8",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Thiel",
                "surname"=>"Gina",
                "age"=>"37",
                "phone"=>"+3188880775457",
                "email"=>"pfeffer.korbin@dubuque.net",
                "gender"=>"female",
                "country"=>"Philippines",
                "position"=>"front",
                "team_id"=>"3",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Stamm",
                "surname"=>"Colleen",
                "age"=>"27",
                "phone"=>"+7671948008921",
                "email"=>"xokon@hotmail.com",
                "gender"=>"male",
                "country"=>"Gibraltar",
                "position"=>"center",
                "team_id"=>"8",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Bogisich",
                "surname"=>"Marian",
                "age"=>"28",
                "phone"=>"+9652247821656",
                "email"=>"reyes.koss@lakin.com",
                "gender"=>"male",
                "country"=>"Malta",
                "position"=>"back",
                "team_id"=>"4",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Jenkins",
                "surname"=>"Adolph",
                "age"=>"23",
                "phone"=>"+7675548008921",
                "email"=>"adolph@hotmail.com",
                "gender"=>"male",
                "country"=>"Belgium",
                "position"=>"center",
                "team_id"=>"10",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Davis",
                "surname"=>"Alicia",
                "age"=>"33",
                "phone"=>"+2262948008921",
                "email"=>"travon@hotmail.com",
                "gender"=>"female",
                "country"=>"France",
                "position"=>"replace",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Frami",
                "surname"=>"Alice",
                "age"=>"31",
                "phone"=>"+77756848008921",
                "email"=>"alice@hotmail.com",
                "gender"=>"female",
                "country"=>"Panama",
                "position"=>"back",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Chang",
                "surname"=>"Julia",
                "age"=>"24",
                "phone"=>"+8871659008921",
                "email"=>"JC@hotmail.com",
                "gender"=>"female",
                "country"=>"Taiwan",
                "position"=>"center",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Mishima",
                "surname"=>"Kazumi",
                "age"=>"39",
                "phone"=>"+8754948008921",
                "email"=>"Devil@hotmail.com",
                "gender"=>"female",
                "country"=>"Japan",
                "position"=>"replace",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Kun",
                "surname"=>"Imitsu",
                "age"=>"19",
                "phone"=>"+7895248008921",
                "email"=>"ninja@hotmail.com",
                "gender"=>"female",
                "country"=>"Japan",
                "position"=>"back",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Mishima",
                "surname"=>"Jin",
                "age"=>"22",
                "phone"=>"+7965248008921",
                "email"=>"tryhard@hotmail.com",
                "gender"=>"male",
                "country"=>"Venezuela",
                "position"=>"center",
                "team_id"=>"2",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Fox",
                "surname"=>"Steeve",
                "age"=>"25",
                "phone"=>"+87845962008921",
                "email"=>"back1@hotmail.com",
                "gender"=>"male",
                "country"=>"Philippines",
                "position"=>"back",
                "team_id"=>"3",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Xiaoyu",
                "surname"=>"Ling",
                "age"=>"15",
                "phone"=>"+7671948008921",
                "email"=>"AOP@hotmail.com",
                "gender"=>"female",
                "country"=>"Finland",
                "position"=>"front",
                "team_id"=>"3",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Dragonov",
                "surname"=>"Sergei",
                "age"=>"40",
                "phone"=>"+76881948008921",
                "email"=>"r2d2@hotmail.com",
                "gender"=>"male",
                "country"=>"Ethiopia",
                "position"=>"center",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Risal",
                "surname"=>"Josie",
                "age"=>"21",
                "phone"=>"+7679978008921",
                "email"=>"grtfly@hotmail.com",
                "gender"=>"female",
                "country"=>"Seychelles",
                "position"=>"front",
                "team_id"=>"11",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Li",
                "surname"=>"Chun",
                "age"=>"26",
                "phone"=>"+9653248008921",
                "email"=>"legs@hotmail.com",
                "gender"=>"female",
                "country"=>"Tuvalu",
                "position"=>"replace",
                "team_id"=>"10",
                "photo_id"=>"1"
            ],
            [
                "name"=>"White",
                "surname"=>"Walter",
                "age"=>"37",
                "phone"=>"+3265948008921",
                "email"=>"cristalblue@hotmail.com",
                "gender"=>"male",
                "country"=>"Albania",
                "position"=>"back",
                "team_id"=>"1",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Pinkman",
                "surname"=>"Jesee",
                "age"=>"23",
                "phone"=>"+98652877008921",
                "email"=>"breakfree@hotmail.com",
                "gender"=>"male",
                "country"=>"San Marino",
                "position"=>"replace",
                "team_id"=>"8",
                "photo_id"=>"1"
            ],
            [
                "name"=>"Hakerman",
                "surname"=>"Mikassa",
                "age"=>"16",
                "phone"=>"+1234548008921",
                "email"=>"yandere@hotmail.com",
                "gender"=>"female",
                "country"=>"Spain",
                "position"=>"back",
                "team_id"=>"9",
                "photo_id"=>"1"
            ]
        ]);
    }
}
