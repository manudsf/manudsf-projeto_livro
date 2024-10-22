<a href="{{ route('user.create') }}" class="btn btn-primary">Novo Usuário</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nome }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('user.show', $user->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                
                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
