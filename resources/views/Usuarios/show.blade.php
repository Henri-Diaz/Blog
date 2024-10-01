{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Detalles del Usuario')

{{-- Definimos el contenido --}}
@section('content')

<h5>Detalles del Usuario</h5>
<br>
<a class="btn btn-danger btn-sm" href="/usuarios/create">Agregar nuevo usuario</a>

<hr>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Pedro Alvarez</td> 
            <td>pedro@gmail.com</td>
            <td>
                <a class="btn btn-success btn-sm" href="/usuarios/edit/1">Modificar</a> 
                <button class="btn btn-danger btn-sm" onclick="destroy(this)" data-url="/usuarios/destroy/1" data-token="{{ csrf_token() }}">Eliminar</button>
            </td>
        </tr>
    </tbody>
</table>

<div class="mt-3">
    <a class="btn btn-secondary btn-sm" href="/usuarios">Volver a la lista</a>
</div>

@endsection

@section('scripts') 
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- JS --}}
<script src="{{ asset('js/usuario.js') }}"></script>

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
                fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': token,
                        'Content-Type': 'application/json'
                    }
                }).then(response => response.json())
                  .then(data => {
                      if (data.success) {
                          Swal.fire(
                              '¡Eliminado!',
                              'El usuario ha sido eliminado.',
                              'success'
                          ).then(() => location.reload());
                      } else {
                          Swal.fire(
                              'Error!',
                              'Hubo un problema al eliminar el usuario.',
                              'error'
                          );
                      }
                  });
            }
        });
    }
</script>
@endsection
