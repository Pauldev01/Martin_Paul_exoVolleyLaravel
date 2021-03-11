<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('surname', 150);
            $table->integer('age');
            $table->string('phone', 150);
            $table->string('email', 150);
            $table->string('gender', 150);
            $table->string('country', 150);
            $table->string('position', 150);
            // $table->unsignedBigInteger('team_id');
            // $table->foreign('team_id')->references('id')->on('teams');
            // $table->unsignedBigInteger('photo_id');
            // $table->foreign('photo_id')->references('id')->on('photos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
