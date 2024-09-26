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
        Schema::create('destino', function (Blueprint $table) {
            $table->id('id_destino');
            $table->string('nombre', 100);
            $table->string('tipo', 50)->nullable();
            $table->string('coordenadas', 50)->nullable();
            $table->bigInteger('orige');
            $table->foreignId('origen')->references('id_origen')->on('origen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destino');
    }
};
