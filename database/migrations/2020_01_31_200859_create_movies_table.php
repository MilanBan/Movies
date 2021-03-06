<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('zanr');
            $table->string('reziser');
            $table->integer('godina');
            $table->string('storyline');            // pogresno napisano ali nije menjano da ne bih izgubio podatke iz baze
            $table->unsignedBigInteger('zanr_id');
            $table->foreign('zanr_id')
                ->references('id')
                ->on('zanrs')
                ->onDelete('cascade');
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
        Schema::dropIfExists('movies');
    }
}
