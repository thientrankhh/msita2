<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCourseCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course__courses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->text('content');
            $table->integer('fees');
            $table->integer('reduce_tuition')->default(0);
            $table->string('image');
            $table->boolean('status')->default(0)->comment('0- Không nổi bật, 1- Nổi bật');
            $table->string('slug');
            $table->unsignedBigInteger('category_id');
            // $table->unsignedBigInteger('teacher_id');
            $table->foreign('category_id')->references('id')->on('course__categories');
            // $table->foreign('teacher_id')->references('id')->on('course__teachers');
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
        Schema::dropIfExists('course__courses');
    }
}
