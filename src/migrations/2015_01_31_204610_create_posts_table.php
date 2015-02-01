<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('summary')->nullable();
			$table->mediumText('markdown');
			$table->boolean('featured')->default(0);
			$table->boolean('status')->default(0);
			$table->string('meta_title')->nullable();
			$table->string('meta_description')->nullable();
			$table->string('meta_keywords')->nullable();
			$table->integer('created_by');
			$table->timestamp('published_at')->nullable();
			$table->softDeletes();
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
		Schema::drop('posts');
	}

}
