<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->text('ans_1')->nullable();
            $table->text('ans_2')->nullable();
            $table->text('ans_3')->nullable();
            $table->text('ans_4')->nullable();
            $table->text('ans_5')->nullable();
            $table->text('correct_ans_1')->nullable();
            $table->text('correct_ans_2')->nullable();
            $table->text('correct_ans_3')->nullable();
            $table->text('correct_ans_4')->nullable();
            $table->text('correct_ans_5')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            //
        });
    }
}
