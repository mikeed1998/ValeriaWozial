<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValeriaEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valeria_envios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('producto')->nullable();
            $table->double('envio_precio', 8, 2)->nullable();
            $table->boolean('envio_general')->default(0);
            $table->boolean('envio_producto')->default(0);
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
        Schema::dropIfExists('valeria_envios');
    }
}
