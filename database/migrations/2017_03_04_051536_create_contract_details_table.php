<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('contract_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->nullable();
            $table->integer('staff_id')->unsigned()->nullable();
            $table->date('start_date')->format('d.m.Y');
            $table->integer('monthly_workingday');
            $table->integer('payment_from_client_monthly');
            $table->integer('payment_for_staff_monthly');
            $table->integer('month_limit');
            $table->integer('active')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('contract_details', function($table) {
            $table->foreign('client_id')->references('id')->on('users');
            $table->foreign('staff_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_details');
    }
}
