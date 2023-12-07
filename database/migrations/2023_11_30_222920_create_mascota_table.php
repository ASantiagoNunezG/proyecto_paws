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
        //
        
        Schema::create('mascota', function (Blueprint $table) {
            $table->id('id_mascota');
            $table->string('nombre',30);
            $table->string('tamano',30);
            $table->string('edad',10);
            $table->enum('sexo',['Macho', 'Hembra']);
            $table->unsignedBigInteger('id_tipomascota');
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->unsignedBigInteger('id_estadomascota');
            $table->unsignedBigInteger('id_raza'); 
            $table->string('foto')->nullable();
            $table->foreign('id_usuario')->references('id_usuario')->on('users');
            $table->foreign('id_estadomascota')->references('id_estadomascota')->on('estado_mascota'); 
            $table->foreign('id_tipomascota')->references('id_tipomascota')->on('tipo_mascota'); 
            $table->foreign('id_raza')->references('id_raza')->on('razas');
            $table->timestamps();
            
            //
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascota');
    }
};
