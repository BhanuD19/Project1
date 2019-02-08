<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
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
			$table->unsignedInteger('user_id');
			$table->date('event_date');
            $table->unsignedInteger('event_id');
            $table->unsignedInteger('city_id');;
            $table->unsignedInteger('handler_id');
			$table->integer('booking_amount');
			$table->string('paid_at');
			$table->unsignedInteger('ticket_status');
            $table->rememberToken();
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
        Schema::dropIfExists('tickets');
    }
}
