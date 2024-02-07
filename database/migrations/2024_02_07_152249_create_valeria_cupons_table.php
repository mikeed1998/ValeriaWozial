<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValeriaCuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valeria_cupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('producto')->nullable();
            $table->integer('descuento')->nullable();
            $table->string('cupon')->nullable();
            $table->boolean('envio_gratis')->default(0);
            $table->boolean('cupon_general')->default(0);
            $table->boolean('cupon_producto')->default(0);
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
        Schema::dropIfExists('valeria_cupons');
    }
}
