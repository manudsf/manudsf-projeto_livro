<section class="edit-form">
    <div class="form-container">
        <form method="POST" action="{{ route('user.update', $user->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="{{ old('nome', $user->nome) }}" class="form-input">
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-input">
            </div>

            <div class="form-group">
                <label class="form-label" for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" value="{{ old('senha', $user->senha) }}" class="form-input">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">Salvar</button>
                <a href="{{ route('user.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</section>
