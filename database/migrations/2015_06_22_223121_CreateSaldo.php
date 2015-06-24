<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaldo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('saldos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
				$table->integer('user_id');
				$table->integer('abono');
				$table->integer('cargo');
				$table->string('referencia');
				$table->string('banco');
				$table->date('fecha');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Saldos');
	}

}
