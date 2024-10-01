{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Editar Publicación')

{{-- Definimos el contenido --}}
@section('content')
<h1 class="text-center">Modificar</h1>
<h5 class="text-center">Formulario para actualizar publicaciones</h5>
<hr>
<div class="container">
    <form action="/publicaciones/update/{{ $publicacion->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12">
                Título
                <input type="text" class="form-control" name="title" value="{{ $publicacion->title }}">
                @error('title')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12">
                Contenido
                <textarea name="content" class="form-control" rows="5">{{ $publicacion->content }}</textarea>
                @error('content')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-6">
                Categoría
                <select name="categoria_id" class="form-control">
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $categoria->id == $publicacion->categoria_id ? 'selected' : '' }}>
                            {{ $categoria->name }}
                        </option>
                    @endforeach
                </select>
                @error('categoria_id')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-6">
                Etiqueta
                <select name="etiqueta_id" class="form-control">
                    @foreach ($etiquetas as $etiqueta)
                        <option value="{{ $etiqueta->id }}" {{ $etiqueta->id == $publicacion->etiqueta_id ? 'selected' : '' }}>
                            {{ $etiqueta->name }}
                        </option>
                    @endforeach
                </select>
                @error('etiqueta_id')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12">
                Comentarios
                <textarea name="comentarios" class="form-control" rows="3">{{ $publicacion->comentarios }}</textarea>
                @error('comentarios')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="col-12 mt-3">
            <button class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
@endsection
