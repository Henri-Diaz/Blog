<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id('publicacion_id'); // Asegúrate de que este sea el ID
            $table->string('titulo');
            $table->text('contenido');
            $table->dateTime('fecha');
            $table->foreignId('usuario_id')->constrained('usuarios', 'usuario_id');
            $table->foreignId('admin_id')->constrained('administradores', 'admin_id');
            $table->foreignId('categoria_id')->constrained('categorias', 'categoria_id');
            $table->foreignId('etiqueta_id')->constrained('etiquetas', 'etiquetas_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('publicaciones');
    }
};
