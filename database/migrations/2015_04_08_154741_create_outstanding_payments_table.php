<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutstandingPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('outstanding_payments', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('card_id');
            $table->double('outstanding_price');
			$table->timestamps();

            $table->foreign('card_id')->references('id')->on('cards');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('outstanding_payments');
	}

}
