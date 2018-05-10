<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCistellaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cistella', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuari')->unsigned();
            $table->dateTime('data');
            $table->integer('status')->default(0);
            $table->foreign('id_usuari')->references('id')->on('users');
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
        Schema::dropIfExists('cistella');
    }
}
