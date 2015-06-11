<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuinielas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quiniela', function(Blueprint $table)
		{
			
			$table->timestamps();
			$table->integer("jornada");
			$table->integer("user_id");
			$table->integer("juego1")->nullable();
			$table->integer("juego2")->nullable();
			$table->integer("juego3")->nullable();
			$table->integer("juego4")->nullable();
			$table->integer("juego5")->nullable();
			$table->integer("juego6")->nullable();
			$table->integer("juego7")->nullable();
			$table->integer("juego8")->nullable();
			$table->integer("juego9")->nullable();
			$table->integer("RL")->nullable();
	        $table->integer("RV")->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quiniela');
	}

}
