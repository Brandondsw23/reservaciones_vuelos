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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id('id_vuelo');
            $table->string('numero_vuelo', 10);
            $table->dateTime('fecha_salida');
            $table->dateTime('fecha_llegada');
            $table->string('origen', 40);
            $table->string('destino', 40);
            $table->string('aerolinea', 50)->nullable();
            $table->string('avion', 50)->nullable();
            $table->string('estado_vuelo', 20)->nullable();
            $table->string('puerta_salida', 5)->nullable();
            $table->string('puerta_llegada', 5)->nullable();
            $table->time('duracion')->nullable();
            $table->string('clase', 20)->nullable();
            $table->integer('capacidad')->nullable();
            $table->integer('asientos_disponibles')->nullable();
            $table->decimal('precio_basico', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
