<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassroomGroupTable extends Migration {

	public function up()
	{
		Schema::create('classroom_group', function(Blueprint $table) {
			$table->timestamps();
			$table->integer('classroom_id')->unsigned();
			$table->integer('group_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('classroom_group');
	}
}