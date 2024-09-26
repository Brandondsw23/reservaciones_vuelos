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
        Schema::create('origen', function (Blueprint $table) {
            $table->id('id_origen');
            $table->string('nombre_origen', 100);
            $table->string('codigo_IATA', 3);
            $table->string('pais', 100);
            $table->string('coordenada', 50)->nullable();
            $table->string('zona_horaria', 50)->nullable();
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
        Schema::dropIfExists('origen');
    }
};
