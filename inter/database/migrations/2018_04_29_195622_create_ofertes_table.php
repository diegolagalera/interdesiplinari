<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcio');
            $table->integer('id_producte')->unsigned();
            $table->integer('data')->unsigned();
            $table->foreign('id_producte')->references('id')->on('productes');
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
        Schema::dropIfExists('ofertes');
    }
}
