<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookCrontoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::where("id_user", Auth::user()->id)->paginate(10);
        return view('dashboard', ['books' => $books]);
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
        $books = new Book;

        $books->autor = $request->autor;
        $books->titulo = $request->titulo;
        $books->subtitulo = $request->subtitulo;
        $books->edicao = $request->edicao;
        $books->editora = $request->editora;
        $books->ano_de_publicacao = $request->ano_de_publicacao; 
        
        //Upload de imagem

        if($request->hasFile('capa_do_livro') && $request->file('capa_do_livro')->isValid()){
            $requestCapa = $request->capa_do_livro;
            $extension = $requestCapa->extension();
            $capaNome = md5($requestCapa->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestCapa->move(public_path('img/capas'), $capaNome);

            $books->capa_do_livro = $capaNome;
        }

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
        $book = Book::where("id", $id)->first();
        // return view("edit", ["book", $book]);
        return view("edit")->with("book", $book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $books = Book::where("id", $id)->first();

        $books->autor = $request->autor;
        $books->titulo = $request->titulo;
        $books->subtitulo = $request->subtitulo;
        $books->edicao = $request->edicao;
        $books->editora = $request->editora;
        $books->ano_de_publicacao = $request->ano_de_publicacao; 
        
        //Upload de imagem

        if($request->hasFile('capa_do_livro') && $request->file('capa_do_livro')->isValid()){
            $requestCapa = $request->capa_do_livro;
            $extension = $requestCapa->extension();
            $capaNome = md5($requestCapa->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestCapa->move(public_path('img/capas'), $capaNome);

            $books->capa_do_livro = $capaNome;
        }
        
        $books->update();

        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Book::find($id)->delete();
        return redirect('dashboard');
    }
}
