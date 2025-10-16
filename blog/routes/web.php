<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return "Hola mundo";
});


//ruta para mostrar listado de registros
Route::get('/posts', function () {
    return "Listado de posts";
});

//ruta para mostrar un formulario de creacion de registros
Route::get('/posts/create', function () {
    return "Formulario de creacion de posts";
});

//ruta para guardar el registro en la base de datos
Route::post('/posts', function () {
    return "Guardar el post en la base de datos";
});

//ruta para mostrar el detalle de un registro
Route::get('/posts/{id}', function ($id) {
    return "Mostrando el detalle del post con id: " . $id;
});

//ruta para mostrar un formulario de edicion de registros
Route::get('/posts/{id}/edit', function ($id) {
    return "Formulario de edicion del post con id: " . $id;
});

//ruta para actualizar el registro en la base de datos
Route::put('/posts/{id}', function ($id) {
    return "Actualizar el post con id: " . $id;
});

//ruta para eliminar un registro de la base de datos
Route::delete('/posts/{id}', function ($id) {
    return "Eliminar el post con id: " . $id;
});