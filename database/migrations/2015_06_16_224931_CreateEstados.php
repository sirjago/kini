<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstados extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estados', function(Blueprint $table)
		{
			$table->integer('Estado_Id');
			$table->integer('Municipio_Id');
			$table->string('estado',110);
			$table->string('municipio',110);
			$table->string('ciudad',110);
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
		Schema::drop('estados');
	}

}
