<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permissions', function(Blueprint $table)
		{
			$table->smallInteger('id', true);
			$table->integer('permission_group_id')->nullable();
			$table->string('name', 150);
			$table->text('display_name');
			$table->text('description')->nullable();
			$table->smallInteger('ischecker')->default(0)->comment('set whether this permission needs a second person check ');
			$table->smallInteger('isadmin')->default(0)->comment('specify whether the role is for administration i.e. 1 is administrative, 0 not');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permissions');
	}

}
