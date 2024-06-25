<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Biblioteca') }}
        </h2>
        
        
    </x-slot>

    <section class="biblioteca">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="adcLivro">
                <a href="{{url('register-book')}}">
                    <x-secondary-button class="ms-4" style="cursor: pointer;">
                    {{ __('Adicionar Livro') }}
                    </x-secondary-button>
                </a>
            </div>  
        </div> 

        <div class="tabelinha" style="display:flex; justify-content: center;" >
            <table class="table table-bordered" style="width: 80vw; text-align:center; justify-content:center;" >
                <thead class="table-light">
                    <tr>
                        <th>Capa</th>
                        <th>Autor</th>
                        <th>Titulo</th>
                        <th>Subtitulo</th>
                        <th>Edição</th>
                        <th>Editora</th>
                        <th>Ano de Publicação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>
                                <img src="/img/capas/{{$book->capa_do_livro}}" height="150px" width="100px">
                            </td>
                            <td>{{$book->autor}}</td>
                            <td>{{$book->titulo}}</td>
                            <td>{{$book->subtitulo}}</td>
                            <td>{{$book->edicao}}</td>
                            <td>{{$book->editora}}</td>
                            <td>{{$book->ano_de_publicacao}}</td>
                            <td>
                                <a href="/edit-book/{{$book->id}}">
                                    <button class="btn btn-outline-info" style="margin-bottom: 6px; padding: 8px 13px 8px 18px;">Editar</button>
                                </a>
                                <form action="delete-book/{{$book->id}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-outline-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>  
        </div>
            
              

            {{$books->links()}}
    
    </section> 
</x-app-layout>
