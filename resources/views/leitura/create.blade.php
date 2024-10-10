<body>
    <div class = "container">
        <h1>Registrar Leitura</h1>
        <form action="{{route('leitura.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="livro"> Livro: </label>
                <input type="text" name="livro">
            </div>
            <div class="form-group">
                <label for="status"> Status: </label>
                <input type="text" name="Status">
            </div>
            <div class="form-group">
                <label for="avaliacao"> Avaliação: </label>
                <input type="text" name="avaliacao">
            </div>
            <div class="form-group">
                <label for="lido_em"> Data da leitura: </label>
                <input type="date" name="lido_em">
            </div>

            <button type="subimit" class = "btn btn-sucess">Salvar</button>
            <a href ="{{route('leitura.index')}}" class="btn btn-secondary">Cancelar</a>
</form>
</div>
</body>