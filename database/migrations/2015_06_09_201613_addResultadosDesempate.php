<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResultadosDesempate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Resultados', function(Blueprint $table)
		{
			 $table->integer("RL");
	 $table->integer("RV");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Resultados', function(Blueprint $table)
		{
			//
		});
	}

}
