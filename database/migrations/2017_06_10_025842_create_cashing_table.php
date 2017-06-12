<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cashings', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned()->index();
          $table->string('method');
          $table->string('formbank');
          $table->string('fromAccountNumber');
          $table->string('fromAccountName');
          $table->date('transferDate');
          $table->time('transferTime');
          $table->integer('amount')->unsigned();
          $table->string('toBank');
          $table->string('toAccountNumber');
          $table->string('toAccountName');
          $table->string('transferStatus');
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
      Schema::dropIfExists('cashings');
    }
}
