<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

     // Especifica la tabla si no sigue la convención
     protected $table = 'publicaciones'; // Cambia esto si tu tabla tiene un nombre diferente

     // Los atributos que son asignables en masa
     protected $fillable = [
         'titulo', // Cambiado a 'titulo'
         'contenido', // Cambiado a 'contenido'
         'fecha', // Agregado si es necesario
         'usuarios_id', // Agregado para relacionar con el usuario
         'admin_id', // Agregado para relacionar con el administrador
         'categoria_id', // Relación con la categoría
         'etiqueta_id', // Agregado si es necesario
     ];
 
     // Relación con la tabla de categorías
     public function category()
     {
         return $this->belongsTo(Categoria::class, 'categoria_id'); // Asegúrate de que la clase Categoria existe
     }
 
     // Relación con la tabla de usuarios
     public function usuario()
     {
         return $this->belongsTo(Usuario::class, 'usuarios_id'); // Asegúrate de que la clase Usuario existe
     }
 
     // Relación con la tabla de administradores
     public function admin()
     {
         return $this->belongsTo(Admin::class, 'admin_id'); // Asegúrate de que la clase Admin existe
     }
}
