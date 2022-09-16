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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question',500);
            $table->string('answer_a',100);
            $table->string('answer_b',100);
            $table->string('answer_c',100);
            $table->string('answer_d',100);
            $table->unsignedBigInteger('competencies_id');
            $table->foreign('competencies_id')->references('id')->on('competencies');
            $table->string('right_answer',1);
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
        Schema::dropIfExists('questions');
    }
};
