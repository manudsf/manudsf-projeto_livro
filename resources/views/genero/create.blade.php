<body>
    <div class = "container">
        <h1>Novo Genero</h1>
        <form action="{{route('genero.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome"> Nome:</label>
                <input type="text" name="nome">
            </div>
            <button type="subimit" class = "btn btn-sucess">Salvar</button>
            <a href ="{{route('genero.index')}}" class="btn btn-secondary">Cancelar</a>
</form>
</div>
</body>