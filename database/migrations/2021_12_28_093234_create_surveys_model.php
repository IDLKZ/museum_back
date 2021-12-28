<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("alias",500);
            $table->string("title_ru",500);
            $table->string("title_kz",500);
            $table->string("title_en",500);
            $table->string("title_de",500)->nullable();
            $table->string("title_fr",500)->nullable();
            $table->string("title_es",500)->nullable();
            $table->string("title_tr",500)->nullable();
            $table->text("url_ru",);
            $table->text("url_kz",);
            $table->text("url_en",);
            $table->text("url_de",)->nullable();
            $table->text("url_fr",)->nullable();
            $table->text("url_es",)->nullable();
            $table->text("url_tr",)->nullable();
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
        Schema::dropIfExists('surveys_model');
    }
}
