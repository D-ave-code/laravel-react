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
        Schema::create('detalle_fact_ventas', function (Blueprint $table) {
            $table->id();
            $table->double('precio_unitario');
            $table->integer('cantidad');
            $table->integer('metodo_envio');




            $table->foreignId('id_productos')->references('id')->on('productos');
            $table->foreignId('id_factura_venta')->references('id')->on('factura_ventas');
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
        Schema::dropIfExists('detalle_fact_ventas');
    }
};
