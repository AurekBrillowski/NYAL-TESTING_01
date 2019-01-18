<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_names', function (Blueprint $table) {
            $table->increments('id');

			$table->string('event_name', 150)->nullable();
            $table->string('alpha_sort_name', 150)->nullable();
            $table->string('race_website', 150)->nullable();

            $table->tinyInteger('ID_nyal_season');
            $table->tinyInteger('ID_month')->nullable();

            $table->tinyInteger('ID_event_type')->nullable();
			$table->char("FLG_club_race", 1)->nullable();
            $table->char('FLG_school_race', 1)->nullable();
            
            $table->date('DT_updated_on')->nullable();
            $table->char('FLG_tentative', 1)->nullable();
            $table->char('FLG_confirmed', 1)->nullable();
            
            $table->integer('EVENT_ORGANIZATION_ID')->nullable();
            $table->timestamps();
            
            $table->foreign('EVENT_ORGANIZATION_ID')->references('ID')->on('EVENT_ORGANIZATIONS')->onDelete('cascade');

        });

    DB::statement('ALTER TABLE EVENT_NAMES ADD CONSTRAINT "CHK_club_race" CHECK (FLG_club_race IN (1,0)) ENABLE');
    DB::statement('ALTER TABLE EVENT_NAMES ADD CONSTRAINT "CHK_school_race" CHECK (FLG_school_race IN (1,0)) ENABLE');
    DB::statement('ALTER TABLE EVENT_NAMES ADD CONSTRAINT "CHK_tentative" CHECK (FLG_tentative IN (1,0)) ENABLE');
    DB::statement('ALTER TABLE EVENT_NAMES ADD CONSTRAINT "CHK_confirmed" CHECK (FLG_confirmed IN (1,0)) ENABLE');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_names');
    }
}
