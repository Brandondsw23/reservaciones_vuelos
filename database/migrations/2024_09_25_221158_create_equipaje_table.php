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
        Schema::create('equipaje', function (Blueprint $table) {
            $table->id('id_equipaje');
            $table->decimal('peso', 5, 2);
            $table->string('dimensiones', 20)->nullable();
            $table->string('tipo_equipaje', 50)->nullable();
            $table->string('estado', 20)->nullable();
            $table->string('ubicacion_actual', 100)->nullable();
            $table->dateTime('fecha_registro')->nullable();
            $table->string('codigo_barras', 50)->nullable();
            $table->bigInteger('pasajero');
            $table->foreignId('pasajeros')->references('id_pasajero')->on('pasajeros');
            $table->bigInteger('vuelo');
            $table->foreignId('vuelos')->references('id_vuelo')->on('vuelos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipaje');
    }
};
