<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrammaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gramma', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id');
            $table->foreign('topic_id')->references('id')->on('topic');
            $table->text('gramma');
            $table->text('definition_1')->nullable();
            $table->text('definition_2')->nullable();
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
        Schema::dropIfExists('gramma');
    }
}
