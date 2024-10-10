<body>
    <div class = "container">
        <h1>Novo Livro</h1>
        <form action="{{route('livro.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo"> Título: </label>
                <input type="text" name="titulo">
            </div>
            <div class="form-group">
                <label for="autor"> Autor: </label>
                <input type="text" name="Autor">
            </div>
            <div class="form-group">
                <label for="genero"> Genero: </label>
                <input type="text" name="genero">
            </div>

            <button type="subimit" class = "btn btn-sucess">Salvar</button>
            <a href ="{{route('livro.index')}}" class="btn btn-secondary">Cancelar</a>
</form>
</div>
</body>