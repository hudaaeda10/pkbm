<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_course_teacher', function (Blueprint $table) {
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('teacher_id')->constrained('students');
            $table->integer('nilai');
            $table->primary(['course_id', 'teacher_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_course_teacher');
    }
}
