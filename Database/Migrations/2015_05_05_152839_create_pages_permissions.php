<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesPermissions extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		foreach (\CMS::CoreModuleParts()->getModuleParts('Pages') as $modulePart) 
		{
			\CMS::permissions()->insertDefaultItemPermissions(
				                 $modulePart->part_key, 
				                 $modulePart->id, 
				                 [
					                 'admin'   => ['show'],
					                 'manager' => ['show']
				                 ]);
		}
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		foreach (\CMS::CoreModuleParts()->getModuleParts('content') as $modulePart) 
		{
			\CMS::permissions()->deleteItemPermissions($modulePart->part_key);
		}
	}
}