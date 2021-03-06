<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username',60)->unique();
			$table->string('email',200)->unique();
			$table->string('password', 60);
			$table->string('remember_token')->nullable();
			//$table->rememberToken();
			$table->timestamps();
			 $table->integer("grupos_id");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
			Schema::drop('users');
		
	}

}
