<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('questions_id');
            $table->foreign('questions_id')->references('id')->on('questions');
            $table->unsignedBigInteger('exams_id');
            $table->foreign('exams_id')->references('id')->on('exams');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams_questions');
    }
};
