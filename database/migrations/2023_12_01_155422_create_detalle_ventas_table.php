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
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_cabecera');
            $table->string('nombre',50);
            $table->integer('cantidad');
            $table->double('precio');
            $table->string('marca',30);

            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_cabecera')->references('id_cabecera')->on('cabecera_ventas');
            $table->primary(['id_producto','id_cabecera']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};
