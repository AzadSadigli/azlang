<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id')->nullable();
            $table->integer('subtopic_id')->nullable();
            $table->integer('user_id');
            $table->string('givenans_1')->nullable();
            $table->string('givenans_2')->nullable();
            $table->string('givenans_3')->nullable();
            $table->string('givenans_4')->nullable();
            $table->string('givenans_5')->nullable();
            $table->string('givenans_6')->nullable();
            $table->string('givenans_7')->nullable();
            $table->string('givenans_8')->nullable();
            $table->string('givenans_9')->nullable();
            $table->string('givenans_10')->nullable();
            $table->string('rightans_1')->nullable();
            $table->string('rightans_2')->nullable();
            $table->string('rightans_3')->nullable();
            $table->string('rightans_4')->nullable();
            $table->string('rightans_5')->nullable();
            $table->string('rightans_6')->nullable();
            $table->string('rightans_7')->nullable();
            $table->string('rightans_8')->nullable();
            $table->string('rightans_9')->nullable();
            $table->string('rightans_10')->nullable();
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
        Schema::dropIfExists('results');
    }
}
