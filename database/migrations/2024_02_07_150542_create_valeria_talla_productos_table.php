<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValeriaTallaProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valeria_talla_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('producto')->nullable();
            $table->string('talla_cm')->nullable();
            $table->string('talla_mx')->nullable();
            $table->string('talla_cs')->nullable();
            $table->string('talla_usa')->nullable();
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
        Schema::dropIfExists('valeria_talla_productos');
    }
}
