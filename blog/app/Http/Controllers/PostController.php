<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return "Guardar el post en la base de datos";
    }

    public function show($id)
    {
        return view('posts.show', compact('id'));
    }

    public function edit($id)
    {
        return view('posts.edit', compact('id'));
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
