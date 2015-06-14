<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatepagesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if ( ! Schema::hasTable('pages'))
		{
			Schema::create('pages', function(Blueprint $table) {
				$table->bigIncrements('id');;
				$table->string('title', 150)->unique();
				$table->string('page_slug', 150)->unique()->index();	
				$table->string('template', 200)->index();
				$table->string('theme', 255)->index();
				$table->timestamps();
			});
		}
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		if (Schema::hasTable('pages'))
		{
			Schema::drop('pages');
		}
	}
}