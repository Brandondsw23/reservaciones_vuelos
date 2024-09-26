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
        Schema::create('reserva_vuelos', function (Blueprint $table) {
            $table->id('id_reserva');
            $table->string('numero_reserva', 20);
            $table->dateTime('fecha_reserva');
            $table->dateTime('fecha_salida');
            $table->dateTime('fecha_llegada');
            $table->string('clase', 20)->nullable();
            $table->string('numero_asiento', 5)->nullable();
            $table->decimal('precio_total', 10, 2)->nullable();
            $table->string('estado_reserva', 20)->nullable();
            $table->string('metodo_pago', 20)->nullable();
            $table->string('numero_targeta_pago', 16)->nullable();
            $table->bigInteger('vuelo');
            $table->foreignId('vuelos')->references('id_vuelo')->on('vuelos');
            $table->bigInteger('pasajero');
            $table->foreignId('pasajeros')->references('id_pasajero')->on('pasajeros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva_vuelos');
    }
};
