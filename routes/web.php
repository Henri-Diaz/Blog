<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionesController;

Route::get('/', function () {
    return view('home');
});

Route::get('/Admin/show', function () { 
    return view('Admin/show');
});

Route::get('/Admin/create', function () {
     return view('Admin/create');
});


Route::get('/Admin/update', function () {
 return view('Admin/update');
});

Route::get('/Usuarios/show', function () { 
    return view('Usuarios/show');
});

Route::get('/Usuarios/create', function () {
     return view('Usuarios/create');
});


Route::get('/Usuarios/update', function () {
 return view('Usuarios/update');
});

Route::get('/Categorias/update', function () {
    return view('Categorias/update');
   });

Route::get('/Categorias/create', function () {
    return view('Categorias/create');
});

Route::get('/Categorias/show', function () { 
    return view('Categorias/show');
});

Route::get('/Etiquetas/update', function () {
    return view('Etiquetas/update');
   });

Route::get('/Etiquetas/create', function () {
    return view('Etiquetas/create');
});

Route::get('/Etiquetas/show', function () { 
    return view('Etiquetas/show');
});


Route::get('/publicaciones/show',  [PublicacionesController::class, 'index']);

Route::get('/publicaciones/create',  [PublicacionesController::class, 'create']);

Route::get('/publicaciones/edit/{publicacion}',  [PublicacionesController::class, 'create']);

Route::post('/publicaciones/store',  [PublicacionesController::class, 'store']);

Route::get('/publicaciones/update/{publicaciones}',  [PublicacionesController::class, 'update']);

Route::delete('/publicaciones/destroy/{id}',  [PublicacionesController::class, 'create']);

