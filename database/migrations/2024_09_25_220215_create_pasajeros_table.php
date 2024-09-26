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
        Schema::create('pasajeros', function (Blueprint $table) {
            $table->id('id_pasajero');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->date('fecha_nacimiento')->nullable();
            $table->string('genero', 50)->nullable();
            $table->string('nacionalidad', 50)->nullable();
            $table->string('tipo_documento', 50)->nullable();
            $table->string('numero_documento', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('telefono', 15)->nullable();
            $table->string('direccion', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasajeros');
    }
};
