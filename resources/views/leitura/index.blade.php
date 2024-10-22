<a href="{{ route('leituras.create') }}" class="btn btn-primary">Nova Leitura</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Book ID</th>
            <th>Status ID</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($leituras as $leitura)
        <tr>
            <td>{{ $leitura->id }}</td>
            <td>{{ $leitura->user_id }}</td>
            <td>{{ $leitura->book_id }}</td>
            <td>{{ $leitura->status_id }}</td>
            <td>
                <a href="{{ route('leituras.show', $leitura->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('leituras.edit', $leitura->id) }}" class="btn btn-warning">Editar</a>
                
                <form action="{{ route('leituras.destroy', $leitura->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
