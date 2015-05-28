<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJuegosField extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('quiniela', function(Blueprint $table)
		{
			$table->integer("user_id");
			$table->integer("juego");
			$table->integer("juego2");
			$table->integer("juego3");
			$table->integer("juego4");
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
