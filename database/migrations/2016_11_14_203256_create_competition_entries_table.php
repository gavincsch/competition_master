<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fk_competition');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->date('birthday')->index();
            $table->string('interests');
            $table->unique(['email','fk_competition']);

            $table->timestamps();

            //foreign
            $table->foreign('fk_competition')->references('id')->on('competitions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competition_entries');
    }
}
