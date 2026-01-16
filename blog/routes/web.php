<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

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
    /*DB::table('users')
    ->orderBy('id')
    ->chunk(100, function ($users) {
        foreach ($users as $user) {
            echo "Usuario: " . $user->name . "<br>";
        }
    });*/

    /*DB::table('users')
    ->orderBy('id')
    ->lazy()->each(function ($user) {
        echo "Usuario: " . $user->name . "<br>";
    });*/

    //return DB::table('users')->max('id');

    //if(DB::table('users')->where('id', 999)->exists()){
      //  return "El usuario existe";
    //} else {
      //  return "El usuario no existe";
    //}

    /*return DB::table('users')
    ->select('id', 'name as Nombre', 'email')
    ->selectRaw('concat(name, " - ", email) as Info')
    ->get();*/

    /*return DB::table('posts')
    ->join('users', 'posts.user_id', '=', 'users.id')
    ->join('categories', 'posts.category_id', '=', 'categories.id')
    ->select('posts.*', 'categories.name as category_name', 'users.name as author')
    ->where('posts.id', '<=', 10)
    ->get();*/

    return DB::table('users')
    ->whereNot('email', 'like', '%@example.com')
    ->get();

});