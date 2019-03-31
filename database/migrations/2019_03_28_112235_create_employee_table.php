<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_first_name');
            $table->string('employee_last_name');
            $table->string('employee_middle_name');
            $table->string('employee_sex');
            $table->string('employee_full_address');
            $table->string('employee_contact_number');
            $table->string('employee_salary');
            $table->string('employee_position');
            $table->string('employee_status');
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
        Schema::dropIfExists('employees');
    }
}
