<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValeriaLanzamientoProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valeria_lanzamiento_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('producto')->nullable();
            $table->string('lanzamiento')->nullable();
            $table->foreign('producto')->references('id')->on('valeria_productos')->onDelete('cascade');
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
        Schema::dropIfExists('valeria_lanzamiento_productos');
    }
}
