<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned();
            $table->Foreign('student_id')->references('id')->on('students');
            $table->bigInteger('subject_id')->unsigned();
            $table->Foreign('subject_id')->references('id')->on('subjects');
            $table->float('amount_paid')->default('0.00');
            $table->float('balance_amt')->default('0.00');
            $table->string('date_paid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
