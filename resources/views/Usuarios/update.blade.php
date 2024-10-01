{{-- resources/views/users/create.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Registro de Usuario')

{{-- Definimos el contenido --}}
@section('content')
<h1>Actualizar un Usuario</h1>
<hr>
<div class="container">
    <form class="row g-3" action="/usuarios/store" method="POST">
        @csrf

        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="nombre" required>
            @error('nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="email" required>
            @error('email')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="contraseña" class="form-label">Contraseña:</label>
            <input type="password" name="contraseña" class="form-control" id="contraseña" required>
            @error('contraseña')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success">Registrar</button>
        </div>
    </form>
</div>
@endsection
