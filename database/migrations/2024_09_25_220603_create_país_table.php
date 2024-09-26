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
        Schema::create('país', function (Blueprint $table) {
            $table->integer('id_país');
            $table->string('nombre_país', 100);
            $table->string('capital', 100)->nullable();
            $table->string('region', 50)->nullable();
            $table->foreignId('destino')->references('id_destino')->on('destino');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('país');
    }
};
