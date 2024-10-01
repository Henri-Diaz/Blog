<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('comentario_id');
            $table->text('contenido');
            $table->foreignId('publicacion_id')->constrained('publicaciones', 'publicacion_id'); // Debe coincidir
            $table->foreignId('usuario_id')->constrained('usuarios', 'usuario_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
