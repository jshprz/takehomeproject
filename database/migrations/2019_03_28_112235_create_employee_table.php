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
            $table->string('employee_first_name',255);
            $table->string('employee_last_name',255);
            $table->string('employee_middle_name',255);
            $table->string('employee_sex',255);
            $table->string('employee_full_address',255);
            $table->string('employee_contact_number',255);
            $table->string('employee_salary',255);
            $table->string('employee_position',255);
            $table->string('employee_status',255);
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
        Schema::dropIfExists('employees');
    }
}
