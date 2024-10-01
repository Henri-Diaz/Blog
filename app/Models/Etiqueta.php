<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;

    protected $table = 'etiquetas'; // Ajusta según el nombre de tu tabla
    protected $primaryKey = 'etiquetas_id'; // Llave primaria de la tabla
    protected $fillable = ['nombre']; // Campos para asignación masiva

  
}
