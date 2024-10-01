{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Detalles de la Categoría')

{{-- Definimos el contenido --}}
@section('content')

<h5>Detalles de la Categoría</h5>
<br>
<a class="btn btn-danger btn-sm" href="/categoria/create">Agregar nueva categoría</a>

<hr>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Salud</td>
            <td>
                <a class="btn btn-success btn-sm" href="/categoria/edit/1">Modificar</a>
                <button class="btn btn-danger btn-sm" onclick="destroy(this)" data-url="/categoria/destroy/1" data-token="TOKEN_DE_EJEMPLO">Eliminar</button>
            </td>
        </tr>
    </tbody>
</table>

<div class="mt-3">
    <a class="btn btn-secondary btn-sm" href="/categoria">Volver a la lista</a>
</div>

@endsection

@section('scripts') 
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function destroy(element) {
        const url = element.getAttribute('data-url');
        const token = element.getAttribute('data-token');

        // Confirmación con SweetAlert
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Aquí se realizaría la lógica para eliminar el elemento
                Swal.fire(
                    '¡Eliminado!',
                    'La categoría ha sido eliminada.',
                    'success'
                );
            }
        });
    }
</script>
@endsection
