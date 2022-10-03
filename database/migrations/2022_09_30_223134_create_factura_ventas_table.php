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
        Schema::create('factura_ventas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_empresa');
            $table->string('num_factura');
            $table->date('fecha');
            $table->double('subtotal');
            $table->double('total');
            
            $table->integer('m_pago');
            $table->time('hora');
            $table->integer('estado');
            $table->foreignId('id_clientes')->references('id')->on('clientes');


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
        Schema::dropIfExists('factura_ventas');
    }
};
