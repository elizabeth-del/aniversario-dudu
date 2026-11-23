<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cartas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_portada');
            $table->string('subtitulo_portada');
            $table->date('fecha_inicio');
            $table->string('saludo_carta');
            $table->text('contenido_carta');
            $table->string('firma_carta');
            $table->string('cancion_titulo')->default('Nuestra Canción');
            $table->string('cancion_archivo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cartas');
    }
};