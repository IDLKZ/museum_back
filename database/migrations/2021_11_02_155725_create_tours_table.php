<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("hall_id")->references("id")->on("halls")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("prev_tour")->nullable()->references("id")->on("tours")->cascadeOnDelete("set null")->cascadeOnUpdate();
            $table->foreignId("next_tour")->nullable()->references("id")->on("tours")->cascadeOnDelete("set null")->cascadeOnUpdate();
            $table->string("image",500);
            $table->string("alias",500);
            $table->string("title_ru",500);
            $table->string("title_kz",500);
            $table->string("title_en",500);
            $table->string("title_de",500)->nullable();
            $table->string("title_fr",500)->nullable();
            $table->string("title_es",500)->nullable();
            $table->string("title_tr",500)->nullable();
            $table->string("audio_ru",500)->nullable();
            $table->string("audio_kz",500)->nullable();
            $table->string("audio_en",500)->nullable();
            $table->string("audio_de",500)->nullable();
            $table->string("audio_fr",500)->nullable();
            $table->string("audio_es",500)->nullable();
            $table->string("audio_tr",500)->nullable();
            $table->string("video_ru",500)->nullable();
            $table->string("video_kz",500)->nullable();
            $table->string("video_en",500)->nullable();
            $table->string("video_de",500)->nullable();
            $table->string("video_fr",500)->nullable();
            $table->string("video_es",500)->nullable();
            $table->string("video_tr",500)->nullable();
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
        Schema::dropIfExists('tours');
    }
}
