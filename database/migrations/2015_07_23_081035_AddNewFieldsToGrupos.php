<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldsToGrupos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grupos', function(Blueprint $table)
		{
			 $table->integer('tipo_grupo');
			  $table->integer('costo')->nullable();
			$table->integer('activo')->nullable();
					$table->date('caducidad')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grupos', function(Blueprint $table)
		{
			//
		});
	}

}
