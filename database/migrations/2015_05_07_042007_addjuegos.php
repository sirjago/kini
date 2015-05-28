<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addjuegos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('quiniela', function(Blueprint $table)
		{
			$table->integer("juego3")->nullable();
			$table->integer("juego4")->nullable();
			$table->integer("juego5")->nullable();
			$table->integer("juego6")->nullable();
			$table->integer("juego7")->nullable();
			$table->integer("juego8")->nullable();
			$table->integer("juego9")->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('quiniela', function(Blueprint $table)
		{
			//
		});
	}

}
