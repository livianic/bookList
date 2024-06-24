<x-app-layout>
    <link rel="stylesheet" href="../css/dashboard.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Biblioteca') }}
        </h2>
        
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="adcLivro">
            <a href="{{url('register-book')}}">
                <x-secondary-button class="ms-4">
                {{ __('Adicionar Livro') }}
                </x-secondary-button>
            </a>
        </div>  
    </div> 

    
        <table>
            <thead>
                <tr>
                    <th>Autor</th>
                    <th>Titulo</th>
                    <th>Subtitulo</th>
                    <th>Edição</th>
                    <th>Editora</th>
                    <th>Ano de Publicação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{$book->autor}}</td>
                        <td>{{$book->titulo}}</td>
                        <td>{{$book->subtitulo}}</td>
                        <td>{{$book->edicao}}</td>
                        <td>{{$book->editora}}</td>
                        <td>{{$book->ano_de_publicacao}}</td>
                        <td>
                            <a href="/edit-book/{{$book->id}}">
                                <button>Editar</button>
                            </a>
                            <form action="delete-book/{{$book->id}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    

        {{$books->links()}}
    
        
</x-app-layout>
