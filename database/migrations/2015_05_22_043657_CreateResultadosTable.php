<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resultados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer("jornada");
	        $table->integer("juego");
			 $table->integer("resultado");
			 $table->integer("ML");
			  $table->integer("MV");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resultados');
	}

}
