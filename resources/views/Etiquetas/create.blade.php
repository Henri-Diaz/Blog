
{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'Categoria')

{{--DEfinimos el contenido--}}
@section('content')
<h1>Crear</h1>

<h5>Formulario para crear Etiquetas</h5>
<hr>
<div class="container">
    <form class="row g-3" action="/etiqueta/store" method="POST" >
      @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">nombre</label>
          <input type="text" name="nombre" class="form-control" id="inputEmail4">
          @error('nombre')
          <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
        
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>

</div>


@endsection