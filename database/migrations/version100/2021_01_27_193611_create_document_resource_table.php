<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentResourceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('document_resource', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->smallInteger('document_id');
			$table->bigInteger('resource_id')->index();
			$table->string('resource_type', 150);
			$table->string('name', 191)->comment('Original name of the document.');
			$table->text('description')->nullable();
			$table->string('ext', 10);
			$table->decimal('size', 10, 0);
			$table->string('mime', 300);
			$table->smallInteger('isactive')->default(1)->comment('Flag to specify if document is active i.e. 1 => active, 0 => not active');
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
		Schema::drop('document_resource');
	}

}
