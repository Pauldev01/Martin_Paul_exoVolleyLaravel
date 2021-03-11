<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->nullable();
            $table->string('city', 150)->nullable();
            $table->string('country', 150)->nullable();
            $table->integer('max_player')->nullable();
            $table->integer('max_front')->nullable();
            $table->integer('max_back')->nullable();
            $table->integer('max_center')->nullable();
            $table->integer('max_replace')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
