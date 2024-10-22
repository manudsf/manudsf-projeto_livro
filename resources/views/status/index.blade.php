<a href="{{ route('status.create') }}" class="btn btn-primary">Novo Status</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($status as $statusItem)
        <tr>
            <td>{{ $statusItem->id }}</td>
            <td>{{ $statusItem->nome }}</td>
            <td>
                <a href="{{ route('status.show', $statusItem->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('status.edit', $statusItem->id) }}" class="btn btn-warning">Editar</a>
                
                <form action="{{ route('status.destroy', $statusItem->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
