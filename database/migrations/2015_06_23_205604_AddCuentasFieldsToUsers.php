<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCuentasFieldsToUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
	           $table->integer('tipocuenta')->nullable();
				$table->string('cuentaclabe',18)->nullable();
				$table->string('cuentatarjeta',25')->nullable();
				$table->string('nombrecompleto',100)->nullable();
					$table->string('banco',30)->nullable();
					$table->string('otrobanco',30)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			//
		});
	}

}
