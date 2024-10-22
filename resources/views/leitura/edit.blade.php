<section class="edit-form">
    <div class="form-container">
        <form method="POST" action="{{ route('leitura.update', $leitura->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="user_id">Usuário:</label>
                <input type="text" id="user_id" name="user_id" value="{{ old('user_id', $leitura->user_id) }}" class="form-input">
            </div>

            <div class="form-group">
                <label class="form-label" for="book_id">Livro:</label>
                <input type="text" id="book_id" name="book_id" value="{{ old('book_id', $leitura->book_id) }}" class="form-input">
            </div>

            <div class="form-group">
                <label class="form-label" for="status_id">Status:</label>
                <input type="text" id="status_id" name="status_id" value="{{ old('status_id', $leitura->status_id) }}" class="form-input">
            </div>

            <div class="form-group">
                <label class="form-label" for="avaliacao">Avaliação:</label>
                <input type="number" id="avaliacao" name="avaliacao" value="{{ old('avaliacao', $leitura->avaliacao) }}" class="form-input" step="0.1" min="0" max="5">
            </div>

            <div class="form-group">
                <label class="form-label" for="lido_em">Data de Leitura:</label>
                <input type="date" id="lido_em" name="lido_em" value="{{ old('lido_em', $leitura->lido_em) }}" class="form-input">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">Salvar</button>
                <a href="{{ route('leitura.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</section>
