<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role');
        });
        Schema::create('branch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
        });
        Schema::create('room', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('number');
            $table->bigInteger('branchID')->unsigned();
            $table->foreign('branchID')->references('id')->on('branch');
        });
        Schema::create('relationship', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            
            
        });
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_roleID')->unsigned();
            $table->foreign('user_roleID')->references('id')->on('user_role');
            
            $table->string('username');
            $table->string('password');
            $table->string('name');
            $table->date('birthday');
            $table->integer('phone_number');
            $table->string('mail');

            $table->bigInteger('roomID')->unsigned();
            $table->foreign('roomID')->references('id')->on('room');
            $table->string('academic_level');
            $table->integer('sex');
            $table->string('address');
            $table->string('picture');
            $table->integer('type');
            $table->bigInteger('branchID')->unsigned();
            $table->foreign('branchID')->references('id')->on('branch');
            $table->integer('id_card');
            
        });
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            
            
            $table->text('content');
            $table->string('image');
            $table->text('briefly');
            $table->bigInteger('employeeID')->unsigned();
            $table->foreign('employeeID')->references('id')->on('employee');
            
            $table->dateTime('time_create');
            
        });
        Schema::create('elderly', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_roleID')->unsigned();
            $table->foreign('user_roleID')->references('id')->on('user_role');
            
            
            $table->string('name');
            $table->date('birthday');
            $table->integer('phone_number');
            $table->string('mail');
//            $table->bigInteger('branchID')->unsigned();
//            $table->foreign('branchID')->references('id')->on('branch');
            $table->bigInteger('roomID')->unsigned();
            $table->foreign('roomID')->references('id')->on('room');
            
            $table->integer('sex');
            $table->string('address');
            $table->string('picture');
            $table->integer('type');
            $table->bigInteger('branchID')->unsigned();
            $table->foreign('branchID')->references('id')->on('branch');
            $table->integer('id_card');
            $table->text('health_status');
            
        });
        Schema::create('guardians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_roleID')->unsigned();
            $table->foreign('user_roleID')->references('id')->on('user_role');
            $table->string('username');
            $table->string('password');
            $table->bigInteger('relationshipID')->unsigned();
            $table->foreign('relationshipID')->references('id')->on('relationship');
            $table->string('name');
            $table->bigInteger('elderlyID')->unsigned();
            $table->foreign('elderlyID')->references('id')->on('elderly');
            $table->date('birthday');
            $table->integer('phone_number');
            $table->string('mail');
//            $table->bigInteger('branchID')->unsigned();
//            $table->foreign('branchID')->references('id')->on('branch');
            
            
            $table->integer('sex');
            $table->string('address');
            $table->string('picture');
            $table->integer('type');
            $table->bigInteger('branchID')->unsigned();
            $table->foreign('branchID')->references('id')->on('branch');
            $table->integer('id_card');
            
            
        });
        Schema::create('health_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('elderlyID')->unsigned();
            $table->foreign('elderlyID')->references('id')->on('elderly');
            $table->integer('heartbeat');
            $table->integer('pressure');
            $table->integer('weight');
            $table->integer('height');
            $table->text('medicine');
            $table->text('note');
            $table->bigInteger('employeeID')->unsigned();
            $table->foreign('employeeID')->references('id')->on('employee');
            $table->dateTime('create_time');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_role');
        Schema::dropIfExists('branch');
        Schema::dropIfExists('room');
        Schema::dropIfExists('relationship');
        Schema::dropIfExists('employee');
        Schema::dropIfExists('news');
        Schema::dropIfExists('elderly');
        Schema::dropIfExists('guardians');
        Schema::dropIfExists('health_detail');
    }
}
