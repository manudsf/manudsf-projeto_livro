<section class="edit-form">
    <div class="form-container">
        <form method="POST" action="{{ route('genero.update', $genero->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="{{ old('nome', $genero->nome) }}" class="form-input">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">Salvar</button>
                <a href="{{ route('genero.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</section>
