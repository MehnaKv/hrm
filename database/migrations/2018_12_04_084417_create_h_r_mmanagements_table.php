<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHRMmanagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_r_mmanagements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Employeename');
            $table->string('Designation');
            $table->string('Department');
            $table->string('Email_id');
            $table->integer('Accountno');
            $table->string('Address');
            $table->integer('Contactno');
            $table->integer('Emergencycontact');
            $table->string('Proof');
            $table->integer('Basicsalary');
            $table->integer('Dearanessallowance');
            $table->integer('Specialallowance');
            $table->integer('Conveyanceallowance');
            $table->integer('Medicalallowance');
            $table->integer('Totalsalary');
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
        Schema::dropIfExists('h_r_mmanagements');
    }
}
