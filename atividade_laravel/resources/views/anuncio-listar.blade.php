<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>
@foreach ($anuncio as $anuncio)
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Data_publicação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{$anuncio->id}}</td>
                <td>{{$anuncio->titulo}}</td>
                <td>{{$anuncio->descricao}}</td>
                <td>{{$anuncio->preco}}</td>
                <td>
				    <a href="/anuncio/remover/{{ $anuncio->id }}">Excluir</a>
                    <a href="{{ route('anuncio-edit', $anuncio->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- {{ $clientes->links() }} --}}