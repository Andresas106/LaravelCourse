<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Listado de posts";
    }

    public function create()
    {
        return "Formulario de creacion de posts";
    }

    public function store()
    {
        return "Guardar el post en la base de datos";
    }

    public function show($id)
    {
        return "Mostrando el detalle del post con id: " . $id;
    }

    public function edit($id)
    {
        return "Formulario de edicion del post con id: " . $id;
    }

    public function update($id)
    {
        return "Actualizar el post con id: " . $id;
    }

    public function destroy($id)
    {
        return "Eliminar el post con id: " . $id;
    }
}
