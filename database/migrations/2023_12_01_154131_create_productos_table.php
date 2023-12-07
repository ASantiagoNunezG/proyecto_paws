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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre',50);
            $table->double('precio');
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_categoria');
            $table->string('marca',30);
            $table->unsignedBigInteger('id_proveedor');
            $table->string('foto')->nullable();
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
