<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;


class BookCrontoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register-book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $books = new ModelBook;

        $books->autor = $request->autor;
        $books->titulo = $request->titulo;
        $books->subtitulo = $request->subtitulo;
        $books->edicao = $request->edicao;
        $books->editora = $request->editora;
        $books->ano_de_publicacao = $request->ano_de_publicacao;   

        $user = auth()->user();
        $books->id_user = $user->id;
        
        $books->save();

        return redirect('dashboard');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
