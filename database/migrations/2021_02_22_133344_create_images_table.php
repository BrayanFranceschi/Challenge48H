<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->text('url_image')->nullable();
            $table->string('nom')->nullable();
            $table->string('type')->nullable();
            $table->integer('avecProduit')->nullable();
            $table->integer('avecHumain')->nullable();
            $table->integer('institutionelle')->nullable();
            $table->string('format')->nullable();
            $table->string('credit')->nullable();
            $table->integer('droitUtilisation')->nullable();
            $table->string('copyright')->nullable();
            $table->date('dateFinUtilisation')->nullable();
            $table->text('tags')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
