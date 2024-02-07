<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValeriaProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valeria_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subcategoria')->nullable();
            $table->string('titulo')->nullable();
            $table->double('precio_original', 8, 2)->nullable();
            $table->double('precio_descuento', 8, 2)->nullable();
            $table->integer('descuento')->nullable();
            $table->boolean('descuento_activo')->default(0);
            $table->text('descripcion')->nullable();
            $table->foreign('subcategoria')->references('id')->on('valeria_subcategoria_productos')->onDelete('cascade');
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
        Schema::dropIfExists('valeria_productos');
    }
}
