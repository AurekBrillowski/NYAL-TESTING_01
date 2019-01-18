<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEVENTORGANIZATIONSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('EVENT_ORGANIZATIONS', function(Blueprint $table)
		{
			// $table->integer('ID')->unique('unq_event_organizations_id');
			$table->increments('ID');
			$table->string('ORGANIZATION_NAME', 100)->nullable();
			$table->string('ORGANIZATION_ABBREVIATION', 10)->nullable();
			$table->string('ORGANIZATION_WEBSITE', 150)->nullable();
			$table->string('CONTACT_NAME', 45)->nullable();
			$table->string('CONTACT_PHONE', 10)->nullable();
			$table->char('RM_STATE', 2)->nullable();
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
		Schema::drop('EVENT_ORGANIZATIONS');
	}

}

