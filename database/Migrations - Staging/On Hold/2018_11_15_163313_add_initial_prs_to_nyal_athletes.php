<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueinitialint;
use Illuminate\Database\Migrations\Migration;

class AddInitialPrsToNyalAthletes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('NYAL_ATHLETES', function (Blueinitialint $table) {
            $table->date('pr_half')->nullable(true);
            $table->date('initial_half')->nullable(true);
            $table->date('initial_10k')->nullable(true);
            $table->date('initial_5k')->nullable(true);
            $table->date('initial_4k')->nullable(true);
            $table->date('initial_3k')->nullable(true);
            $table->date('initial_2k')->nullable(true);
            $table->date('initial_1k')->nullable(true);
            $table->date('initial_3200m')->nullable(true);
            $table->date('initial_3000m')->nullable(true);
            $table->date('initial_2400m')->nullable(true);
            $table->date('initial_1600m')->nullable(true);
            $table->date('initial_mile')->nullable(true);
            $table->date('initial_1500m')->nullable(true);
            $table->date('initial_1200m')->nullable(true);
            $table->date('initial_800m')->nullable(true);
            $table->date('initial_400m')->nullable(true);
            $table->date('initial_200m')->nullable(true);
            $table->date('initial_100m')->nullable(true);
            $table->date('initial_50m')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nyal_athletes', function (Blueprint $table) {
            $table->dropColumn(['initial_10k', 'initial_5k', 'initial_4k', 'initial_3k', 'initial_2k', 'initial_1k', 'initial_3200m', 'initial_3000m', 'initial_2400m', 'initial_1600m', 'initial_mile', 'initial_1500m', 'initial_800m', 'initial_400m', 'initial_200m', 'initial_100m', 'initial_50m']);
        });
    }
}
