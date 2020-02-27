<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictionaryWords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_words', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('concept_id');
            $table->unsignedBigInteger('category_id');
            $table->string('language', 50);
            $table->string('word', 255);
            $table->string('transcription', 255);
            $table->text('description');
            $table->timestamps();

            $table->foreign('concept_id')->references('id')->on('dictionary_concept');
            $table->foreign('category_id')->references('id')->on('dictionary_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionary_words');
    }
}
