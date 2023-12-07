<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cabecera_ventas', function (Blueprint $table) {
            $table->id('id_cabecera');
            $table->date('fecha_venta');
            $table->double('total');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_tipoboleta');
            $table->date('fecha_recojo');
            $table->string('ruc',11);
            $table->string('razon');
            $table->unsignedBigInteger('id_tipopago');
            $table->timestamps();
            $table->foreign('id_usuario')->references('id_usuario')->on('users');
            $table->foreign('id_tipoboleta')->references('id_tipoboleta')->on('tipo_boleta');
            $table->foreign('id_tipopago')->references('id_tipopago')->on('tipo_pago');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabecera_ventas');
    }
};
