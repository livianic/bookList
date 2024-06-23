<x-guest-layout>
  <h1 class="text-center">Adicione seu livro</h1>
  <form class="formCad" id="formCad" method="post" action="dashboard">
    @csrf 
    <label for="">Autor</label>
    <input class="form-control" type="text" name="autor" id="autor" placeholder="ex: Joseph Jacobs" required>
    <label>Titulo do livro</label>
    <input class="form-control" type="text" name="titulo" id="titulo" placeholder="ex: Os três porquinhos" required>
    <label>Insira o subtítulo do livro</label>
    <input class="form-control" type="text" name="subtitulo" id="subtitulo" placeholder="ex: Uma História de Engenho e Coragem" required>
    <label>Insira a edição do seu livro</label>
    <input class="form-control" type="text" name="edicao" id="edicao" placeholder="ex: 12ª" required>
    <label>Insira a editora do seu livro</label>
    <input class="form-control" type="text" name="editora" id="editora" placeholder="ex: Estrela Cultural" required>
    <label>Insira o ano em que seu livro foi publicado</label>
    <input class="form-control" type="number" name="ano_de_publicacao" id="ano_de_publicacao" placeholder="ex: 2018" required>
    <!-- <label>Adicione a capa do seu livro</label>
    <input class="form-control" type="file" name="capaDoLivro" id="capaDoLivro"> -->
      <input class="btn btn-secondary mt-3 mb-2" type="submit" value="Adicionar">

    
    
    
  </form>
</x-guest-layout>
