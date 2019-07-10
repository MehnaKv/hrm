<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leavedetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Selectmonth');
            $table->integer('Enterworkingdays');
            $table->string('Employeename');
            $table->string('Date');
            $table->string('Checkin');
            $table->string('Checkout');
            $table->string('Leave');
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
        Schema::dropIfExists('leavedetails');
    }
}
