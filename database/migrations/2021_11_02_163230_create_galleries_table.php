<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("image",500);
            $table->foreignId("hall_id")->references("id")->on("halls")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("tour_id")->references("id")->on("tours")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("model_id")->references("id")->on("3dmodels")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("news_id")->references("id")->on("news")->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('galleries');
    }
}
