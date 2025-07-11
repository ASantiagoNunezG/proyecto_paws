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
        Schema::create('empleado', function (Blueprint $table) {
            $table->id('id_empleado');
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('dni',8)->unique();
            $table->string('direccion',50);
            $table->string('celular',15);
            $table->string('correo')->unique();
            $table->string('contrasena');
            $table->unsignedBigInteger('id_puesto');
            $table->string('foto')->nullable();
            $table->foreign('id_puesto')->references('id_puesto')->on('puesto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado');
    }
};
