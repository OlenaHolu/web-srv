<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index')->with('noticias', Noticia::paginate(15));
    }

    public function search(string $term)
    {
        return view('index')->with('noticias', Noticia::where('title', 'like', "%$term%")->paginate(15));
    }

    public function show(Noticia $noticia)
    {
        return view('show')->with('noticia', $noticia);
    }
}
