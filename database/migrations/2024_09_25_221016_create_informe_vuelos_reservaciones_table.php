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
        Schema::create('informe_vuelos_reservaciones', function (Blueprint $table) {
            $table->id('id_informe');
            $table->dateTime('fecha_informe');
            $table->string('numero_vuelo', 10);
            $table->dateTime('fecha_salida');
            $table->dateTime('fecha_llegada');
            $table->string('origen', 3);
            $table->string('destino', 3);
            $table->string('aerolinea', 50)->nullable();
            $table->string('clase', 20)->nullable();
            $table->integer('numero_asiento_reservado')->nullable();
            $table->integer('numero_asiento_disponible')->nullable();
            $table->integer('capacidad_total')->nullable();
            $table->decimal('precio_total_recaudado', 15, 2)->nullable();
            $table->integer('numero_reservas')->nullable();
            $table->string('estado_vuelo', 20)->nullable();
            $table->string('estado_reserva', 20)->nullable();
            $table->bigInteger('vuelo');
            $table->foreignId('vuelos')->references('id_vuelo')->on('vuelos');
            $table->bigInteger('reserva_vuelo');
            $table->foreignId('reserva_vuelos')->references('id_reserva')->on('reserva_vuelos');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informe_vuelos_reservaciones');
    }
};
