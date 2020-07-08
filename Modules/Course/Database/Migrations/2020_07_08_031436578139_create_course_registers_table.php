<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course__registers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->tinyInteger('status')->default(0)->comment('0-Chưa xem, 1- Đã Xem, 2-Xác nhận học, 3- Xác nhận hủy');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('course_id')->references('id')->on('course__courses');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('course__registers');
    }
}
