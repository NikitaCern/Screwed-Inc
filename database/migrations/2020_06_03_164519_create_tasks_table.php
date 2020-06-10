<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
          $table->increments('id');
          $table->datetime('deadline');
          $table->string('name');
          $table->integer('amount');
          $table->integer('amount_left');
          $table->integer('order')->unsigned();
          $table->string('part');
          $table->string('responsible_employee');
          $table->foreign('order')->references('id')->on('orders');
          $table->foreign('part')->references('code')->on('parts');
          $table->foreign('responsible_employee')->nullable()->references('personal_number')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
