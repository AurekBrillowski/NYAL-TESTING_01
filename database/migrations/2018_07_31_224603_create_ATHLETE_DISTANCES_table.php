<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthleteDistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athlete_distances', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->decimal('NYAL_ATHLETE_ID')->nullable(false);
            $table->char('FLG_TRACK_OR_XC',1)->default('U')->nullable(false);
            $table->string('DISTANCES_NAME',50)->nullable(false);
            $table->decimal('DISTANCE_METRIC',6,2)->nullable(true);
            $table->decimal('DISTANCE_IMPERIAL',6,2)->nullable(true);
            $table->date('CURRENT_TIME')->nullable(true);
            $table->date('CURRENT_DATE')->nullable(true);
            $table->date('GOAL_TIME')->nullable(true);
            $table->date('GOAL_DATE')->nullable(true);
            $table->date('PR_CURRENT_TIME')->nullable(true);
            $table->date('PR_CURRENT_DATE')->nullable(true);
            $table->date('PR_BEST_TIME')->nullable(true);
            $table->date('PR_BEST_DATE')->nullable(true);
            $table->decimal('COMPETITION_DISTANCES_ID')->index('IDX_COMPETITION_DISTANCES_ID')->nullable(false);
            $table->foreign('COMPETITION_DISTANCES_ID')->references('id')->on('COMPETITION_DISTANCES');
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
        Schema::dropIfExists('athlete_distances');
    }
}
