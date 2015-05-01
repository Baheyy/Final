<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('processes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('hotel')->nullable();
            $table->integer('card_id');
            $table->string('bike_id')->nullable();
            $table->string('station_from')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->string('station_to')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->dateTime('time_consumed')->nullable();
            $table->integer('cost')->nullable();
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
		Schema::drop('processes');
	}

}
