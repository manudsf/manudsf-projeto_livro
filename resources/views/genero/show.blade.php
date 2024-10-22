

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Gênero') }} <!-- Cabeçalho ou título da página -->
    </h2>
@endsection

@section('content')
    <section class="details">
        <div class="content">
            <div class="meta">
                <span class="label">ID:</span>
                <span class="info">{{ $genero->id }}</span> <!-- Mostra o ID do gênero -->
            </div>
            <div class="meta">
                <span class="label">Nome:</span>
                <span class="info">{{ $genero->nome }}</span> <!-- Mostra o nome do gênero -->
            </div>
            <a href="{{ route('genero.index') }}" class="btn-return"> Voltar </a> <!-- Link para voltar -->
        </div>
    </section>
@endsection
