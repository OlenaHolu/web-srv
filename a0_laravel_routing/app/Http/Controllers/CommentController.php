<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Muestra los comentarios desde la sesión
    function index()
    {

        return view('index')
            ->with('superaray', session('comments'));
    }


    // Formulario para crear comentarios
    function create()
    {
        return view('create');
    }

    // Almacena el comentario en la sesión
    function store(Request $request)
    {
        session()->push('comments', $request->comment);
        return redirect('/comments');
    }
    // Buscar por id  
    function show(string $commentid)
    {
        return view('show')
            ->with('texto', session('comments')[$commentid])
            ->with('id', $commentid);
    }


    //Editar un comentario
    function edit(int $commentid)
    {
        return view('edit')
            ->with('cid', $commentid)
            ->with('ctext', session('comments')[$commentid]);
    }


    //Para que muestre la actualizacion
    function update(Request $request, string $commentid)
    {
        $comentarios = session('comments');

        $comentarios[$commentid] = $request->comment;
        session()->put('comments', $comentarios);
        return redirect('/comments');
    }


    //Para que elimine un comentario
    public function destroy(string $commentid)
    {
        $comentarios = session('comments');
        array_splice($comentarios, $commentid, 1);
        session()->put('comments', $comentarios);
        return redirect('/comments');
    }
}
