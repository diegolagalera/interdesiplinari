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
            $table->dateTime('data_inici');
            $table->dateTime('data_final');
            $table->foreign('id_producte')->references('id')->on('productes');
            $table->integer('descompte')->unsigned();
            $table->integer('active')->unsigned()->default(1);
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
