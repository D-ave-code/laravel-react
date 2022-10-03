<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->double('precio');
            $table->string('descripcion');
            $table->string('imagenP');
            $table->foreignId('id_tipo_productos')->references('id')->on('tipo_productos');
            $table->foreignId('id_marcas')->references('id')->on('marcas');
            $table->foreignId('id_tipo_personas')->references('id')->on('tipo_personas');




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
        Schema::dropIfExists('productos');
    }
};
