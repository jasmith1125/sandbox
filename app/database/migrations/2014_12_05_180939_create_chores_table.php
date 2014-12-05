<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoresTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    Schema::create('chores', function($table) {

			#AI, PK
			$table->increments('id');

			# created_at, updated_at columns
			$table->timestamps();

			# general data
			$table->string('description');
			$table->integer('user_id')->unsigned();
			$table->boolean('completed');

			# define foreign key
			$table->foreign('user_id')->references('id')->on('users');

		});
	}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chores');
    }

}