<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
			$table->string('lname');
			$table->string('email');
			$table->string('title');
			$table->string('os');
			$table->string('description');
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticketId')->unsigned();
            $table->foreign('ticketId')->references('id')->on('tickets');
            $table->string('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
		Schema::dropIfExists('comments');
    }
}
