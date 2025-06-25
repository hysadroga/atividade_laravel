
<form action="{{ route('anuncio-store') }}" method="POST">
    @csrf

    {{-- Essa linha irá recuperar o ID e deixar invisível --}}
    <input type="hidden" name="id" value={{ $anuncio->id ?? old('id') }}>
    
    <label for="titulo">titulo</label>
    <input type="text" name="titulo" id="titulo" value={{ $anuncio-> titulo ?? old('titulo') }}>

    <label for="descricao">descricao</label>
    <input type="text" name="descricao" id="descricao" value={{ $anuncio-> descricao ?? old('descricao') }}>

    <label for="preco">preco</label>
    <input type="text" name="preco" id="preco" value={{ $anuncio-> preco ?? old('preco') }}>

    <button type="submit">Cadastrar</button>
</form>