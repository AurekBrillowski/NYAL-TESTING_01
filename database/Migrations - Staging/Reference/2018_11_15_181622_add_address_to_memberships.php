<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressToMemberships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('memberships', function (Blueprint $table) {
            $table->string('address_line_1', 100)->after('NAME');
            // $table->string('address_line_2', 100)->after('ADDRESS_LINE_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('memberships', function (Blueprint $table) {
            // $table->dropColumn(['address_line_1', 'address_line_2']);
            $table->dropColumn('address_line_1');
        });
    }
}
