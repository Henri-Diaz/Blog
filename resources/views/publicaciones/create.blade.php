@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Crear Publicación')

{{-- Definimos el contenido --}}
@section('content')
<h1>Crear una Publicación</h1>
<hr>
<div class="container">
    <form class="row g-3" action="/publicaciones/store" method="POST">
        @csrf

        <div class="col-md-12">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" name="title" class="form-control" id="titulo" required>
            @error('title')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-12">
            <label for="contenido" class="form-label">Contenido:</label>
            <textarea name="content" class="form-control" id="contenido" rows="5" required></textarea>
            @error('content')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="categoria" class="form-label">Categoría:</label>
            <select name="categoria_id" class="form-select" id="categoria" required>
                <option value="">Seleccione una categoría</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                @endforeach
            </select>
            @error('categoria_id')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="etiqueta" class="form-label">Etiqueta:</label>
            <select name="etiqueta_id" class="form-select" id="etiqueta" required>
                <option value="">Seleccione una etiqueta</option>
                @foreach($etiquetas as $etiqueta)
                    <option value="{{ $etiqueta->id }}">{{ $etiqueta->name }}</option>
                @endforeach
            </select>
            @error('etiqueta_id')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="col-md-12">
            <label for="comentarios" class="form-label">Comentarios:</label>
            <textarea name="comentarios" class="form-control" id="comentarios" rows="3"></textarea>
            @error('comentarios')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Publicar</button>
        </div>
    </form>
</div>
@endsection
