<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaRecord extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Record', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer("jornada_id");
			$table->integer("user_id");
			$table->integer("total");
			$table->integer("desempate");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Record');
	}

}
