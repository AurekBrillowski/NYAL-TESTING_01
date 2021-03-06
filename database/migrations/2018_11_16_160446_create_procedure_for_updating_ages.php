<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureForUpdatingAges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $command = "
            CREATE OR REPLACE PROCEDURE myproc(p1 IN NUMBER, p2 OUT NUMBER) AS
            BEGIN
                p2 := p1 * 2;
            END;
        ";

        DB::connection()->getPdo()->exec($command);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $command = "DROP PROCEDURE myproc";
        DB::connection()->getPdo()->exec($command);
    }
}
