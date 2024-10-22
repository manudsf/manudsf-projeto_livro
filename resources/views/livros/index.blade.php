<a href="{{ route('livros.create') }}" class="btn btn-primary">Novo Livro</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($livros as $livro)
        <tr>
            <td>{{ $livro->id }}</td>
            <td>{{ $livro->titulo }}</td>
            <td>{{ $livro->autor }}</td>
            <td>
                <a href="{{ route('livros.show', $livro->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-warning">Editar</a>
                
                <form action="{{ route('livros.destroy', $livro->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
