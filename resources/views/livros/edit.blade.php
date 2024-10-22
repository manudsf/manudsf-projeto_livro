<section class="edit-form">
    <div class="form-container">
        <form method="POST" action="{{ route('livro.update', $livro->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" value="{{ old('titulo', $livro->titulo) }}" class="form-input">
            </div>

            <div class="form-group">
                <label class="form-label" for="autor">Autor:</label>
                <input type="text" id="autor" name="autor" value="{{ old('autor', $livro->autor) }}" class="form-input">
            </div>

            <div class="form-group">
                <label class="form-label" for="genero_id">Gênero:</label>
                <input type="text" id="genero_id" name="genero_id" value="{{ old('genero_id', $livro->genero_id) }}" class="form-input">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">Salvar</button>
                <a href="{{ route('livro.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</section>
