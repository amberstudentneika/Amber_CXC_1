<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_choices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned();
            $table->Foreign('student_id')->references('id')->on('students');
            $table->bigInteger('subject_id')->unsigned();
            $table->Foreign('subject_id')->references('id')->on('subjects');
            $table->string('status')->default('pending');
            $table->string('year_of_exam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_choices');
    }
}
