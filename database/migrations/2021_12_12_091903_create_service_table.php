<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
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
            $table->text("pricing_ru");
            $table->text("pricing_en");
            $table->text("pricing_kz");
            $table->text("pricing_de")->nullable();
            $table->text("pricing_fr")->nullable();
            $table->text("pricing_es")->nullable();
            $table->text("pricing_tr")->nullable();
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
        Schema::dropIfExists('service');
    }
}
