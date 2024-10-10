<body>
    <div class = "container">
        <h1>Novo Usuário</h1>
        <form action="{{route('user.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome"> Nome:</label>
                <input type="text" name="nome">
            </div>
            <div class="form-group">
                <label for="email"> Email:</label>
                <input type="text" name="email">
            </div>
            <div class="form-group">
                <label for="nome"> Senha: </label>
                <input type="text" name="senha">
            </div>
            <button type="subimit" class = "btn btn-sucess">Salvar</button>
            <a href ="{{route('user.index')}}" class="btn btn-secondary">Cancelar</a>
</form>
</div>
</body>