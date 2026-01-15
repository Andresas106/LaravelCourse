<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class);


/*Route::prefix('posts')->name('`posts.')->controller(PostController::class)->group(function () {
    //ruta para mostrar listado de registros
    Route::get('/', 'index')->name('index');

    //ruta para mostrar un formulario de creacion de registros
    Route::get('/create', 'create')->name('create');

    //ruta para guardar el registro en la base de datos
    Route::post('/', 'store')->name('store');

    //ruta para mostrar el detalle de un registro
    Route::get('/{id}', 'show')->name('show');

    //ruta para mostrar un formulario de edicion de registros
    Route::get('/{id}/edit', 'edit')->name('edit');

    //ruta para actualizar el registro en la base de datos
    Route::put('/{id}', 'update')->name('update');

    //ruta para eliminar un registro de la base de datos
    Route::delete('/{id}', 'destroy')->name('destroy');

});*/



Route::resource('posts', PostController::class)
->parameters(['posts' => 'id'])
->names('posts');

Route::get('/prueba', function () {
    return 'Hola desde la ruta de prueba';
});