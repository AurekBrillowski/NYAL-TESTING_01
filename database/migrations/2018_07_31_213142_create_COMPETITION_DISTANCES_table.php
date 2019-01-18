<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionDistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_distances', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->char('ID_DISCIPLINE',2)->nullable(false);
            $table->string('DISTANCE_NAME', 50)->nullable(true);
            $table->decimal('DISTANCE_METRIC', 7, 2)->nullable(true);
            $table->string('METRIC_UNITS', 10)->nullable(true);
            $table->decimal('DISTANCE_IMPERIAL', 7, 2)->nullable(true);
            $table->string('IMPERIAL_UNITS', 10)->nullable(true);
            $table->string('SPORT', 20)->nullable(true);
            $table->decimal('DISPLAY_ORDER', 4, 2)->nullable(true);
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
        Schema::dropIfExists('competition_distances');
    }
}
