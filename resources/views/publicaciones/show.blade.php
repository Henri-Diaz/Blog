{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Detalles de la Publicación')

{{-- Definimos el contenido --}}
@section('content')
<h1 class="text-center">Detalles de la Publicación</h1>
<hr>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Título</h3>
            <p>{{ $publicacion->title }}</p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-12">
            <h3>Contenido</h3>
            <p>{{ $publicacion->content }}</p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-6">
            <h3>Categoría</h3>
            <p>{{ $publicacion->categoria->name }}</p>
        </div>

        <div class="col-6">
            <h3>Etiqueta</h3>
            <p>{{ $publicacion->etiqueta->name }}</p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-12">
            <h3>Comentarios</h3>
            <p>{{ $publicacion->comentarios }}</p>
        </div>
    </div>

    <div class="col-12 mt-3">
        <a href="/publicaciones" class="btn btn-secondary">Volver a la lista</a>
        <a href="/publicaciones/edit/{{ $publicacion->id }}" class="btn btn-primary">Editar</a>
    </div>
</div>
@endsection
