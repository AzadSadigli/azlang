<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('question_body');
            $table->text('ans_1');
            $table->text('ans_2');
            $table->text('ans_3');
            $table->text('ans_4');
            $table->text('ans_5');
            $table->text('correct_ans_1');
            $table->text('correct_ans_2');
            $table->text('correct_ans_3');
            $table->text('correct_ans_4');
            $table->text('correct_ans_5'); 
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
}
