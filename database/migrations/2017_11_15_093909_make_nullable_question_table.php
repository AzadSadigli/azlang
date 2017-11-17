<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeNullableQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn('ans_1');
            $table->dropColumn('ans_2');
            $table->dropColumn('ans_3');
            $table->dropColumn('ans_4');
            $table->dropColumn('ans_5');
            $table->dropColumn('correct_ans_1');
            $table->dropColumn('correct_ans_2');
            $table->dropColumn('correct_ans_3');
            $table->dropColumn('correct_ans_4');
            $table->dropColumn('correct_ans_5'); 
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
