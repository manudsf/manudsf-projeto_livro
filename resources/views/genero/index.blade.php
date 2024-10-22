<a href="{{ route('genero.create') }}" class="btn btn-primary">Novo Gênero</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($generos as $genero)
        <tr>
            <td>{{ $genero->id }}</td>
            <td>{{ $genero->nome }}</td>
            <td>
                <a href="{{ route('genero.show', $genero->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('genero.edit', $genero->id) }}" class="btn btn-warning">Editar</a>
                
                <form action="{{ route('genero.destroy', $genero->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
