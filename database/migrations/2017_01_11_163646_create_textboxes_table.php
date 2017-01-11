<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextboxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('textboxes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('textboxTitle');
			$table->longtext('textboxText');
			$table->integer('categoryID');
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
		Schema::drop('textboxes');
	}

}
