<?php

use Illuminate\Database\Migrations\Migration;

class FavouriteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('favourite',function($table)
		{
			$table->Increments('id');
			$table->Integer('user_id')->unsigned('3');
			$table->Integer('posts_id')->unsigned('3');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
