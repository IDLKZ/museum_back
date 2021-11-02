<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("question_ru",500);
            $table->string("question_en",500);
            $table->string("question_kz",500);
            $table->string("question_de",500)->nullable();
            $table->string("question_fr",500)->nullable();
            $table->string("question_es",500)->nullable();
            $table->string("question_tr",500)->nullable();
            $table->text("answer_ru");
            $table->text("answer_en");
            $table->text("answer_kz");
            $table->text("answer_de")->nullable();
            $table->text("answer_fr")->nullable();
            $table->text("answer_es")->nullable();
            $table->text("answer_tr")->nullable();
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
        Schema::dropIfExists('faq');
    }
}
