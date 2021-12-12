<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("image",500);
            $table->string("alias",500);
            $table->string("title_ru",500);
            $table->string("title_kz",500);
            $table->string("title_en",500);
            $table->string("title_de",500)->nullable();
            $table->string("title_fr",500)->nullable();
            $table->string("title_es",500)->nullable();
            $table->string("title_tr",500)->nullable();
            $table->text("description_ru");
            $table->text("description_en");
            $table->text("description_kz");
            $table->text("description_de")->nullable();
            $table->text("description_fr")->nullable();
            $table->text("description_es")->nullable();
            $table->text("description_tr")->nullable();
            $table->string("date_start");
            $table->string("date_end");
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
        Schema::dropIfExists('events');
    }
}
