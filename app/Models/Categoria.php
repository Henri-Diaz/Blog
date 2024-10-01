<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Ajusta según el nombre de tu tabla
    protected $primaryKey = 'categoria_id'; // Llave primaria de la tabla
    protected $fillable = ['nombre']; // Campos para asignación masiva
}

