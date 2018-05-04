<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductesCompratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productes_comprats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cistella')->unsigned();
            $table->integer('id_producte')->unsigned();
            $table->integer('id_oferta')->unsigned();
            $table->integer('quantitat')->unsigned();
            
            $table->foreign('id_cistella')->references('id')->on('cistella');
            $table->foreign('id_producte')->references('id')->on('productes');
            $table->foreign('id_oferta')->references('id')->on('ofertes');
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
        Schema::dropIfExists('productes_comprats');
    }
}
