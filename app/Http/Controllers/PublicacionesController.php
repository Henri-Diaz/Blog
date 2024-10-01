<?php

namespace App\Http\Controllers;

use App\Models\Publicacion; 
use App\Models\Categoria; 
use App\Models\Etiqueta; 
use Illuminate\Http\Request;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listar todas las publicaciones
        $publicaciones = Publicacion::select(
            "publicaciones.publicacion_id as id", // Cambiado a 'publicacion_id'
            "publicaciones.titulo as title", // Cambiado a 'titulo'
            "publicaciones.contenido as content", // Cambiado a 'contenido'
            "categorias.nombre as category"
        )->join("categorias", "categorias.categoria_id", "=", "publicaciones.categoria_id")->get();

        // Mostrar vista show.blade.php junto al listado de publicaciones
        return view('publicaciones.show')->with(['publicaciones' => $publicaciones]); // Cambiado a 'publicaciones.show'
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Listar categorías para llenar select 
        $categorias = Categoria::all();
        $etiquetas = Etiqueta::all(); 

        // Mostrar vista create.blade.php junto al listado de categorías
        return view('publicaciones.create')->with(['categorias' => $categorias, 'etiquetas' => $etiquetas]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar campos
        $data = $request->validate([
            'titulo' => 'required', // Cambiado a 'titulo'
            'contenido' => 'required', // Cambiado a 'contenido'
            'categoria_id' => 'required',
            'etiqueta_id' => 'required' // Cambiado a 'etiqueta_id'
        ]);

        // Enviar insert
        Publicacion::create($data);

        // Redireccionar
        return redirect('/publicaciones/show');
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        // Lógica para mostrar una publicación específica
        $publicacion = Publicacion::findOrFail($id);
        return view('publicaciones.detail')->with(['publicacion' => $publicacion]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param Publicacion $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacion $publicacion)
    {
        // Listar categorías para llenar select
        $categorias = Categoria::all();
        $etiquetas = Etiqueta::all();
        return view('publicaciones.update')->with(['publicacion' => $publicacion, 'categorias' => $categorias, 'etiquetas' => $etiquetas]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request
     * @param Publicacion $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        // Validar campos
        $data = $request->validate([
            'titulo' => 'required', // Cambiado a 'titulo'
            'contenido' => 'required', // Cambiado a 'contenido'
            'categoria_id' => 'required',
            'etiqueta_id' => 'required' // Cambiado a 'etiqueta_id'
        ]);

        // Reemplazar datos anteriores
        $publicacion->titulo = $data['titulo']; // Cambiado a 'titulo'
        $publicacion->contenido = $data['contenido']; // Cambiado a 'contenido'
        $publicacion->categoria_id = $data['categoria_id'];
        $publicacion->etiqueta_id = $data['etiqueta_id']; // Cambiado a 'etiqueta_id'
        $publicacion->updated_at = now();

        // Enviar a guardar la actualización
        $publicacion->save();

        // Redireccionar
        return redirect('/publicaciones/show');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        // Lógica para eliminar una publicación
        $publicacion = Publicacion::findOrFail($id);
        $publicacion->delete();

        // Redireccionar
        return redirect('/publicaciones/show');
    }
}
