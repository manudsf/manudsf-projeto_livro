<x-slot name = "header">
    <h2 class = "font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{__('Leitura')}}
    </h2>
</x-slot>
<section class = "details">
   <div class ="content">
    <div class = "meta">
        <span class = "label">ID:</span>
        <span class = "info">{{ $leitura->id}}</span>
    </div>
    <div class = "meta">
        <span class = "label">Usuário:</span>
        <span class = "info">{{ $leitura->user_id}}</span>
    </div>
    <div class = "meta">
        <span class = "label">Livro:</span>
        <span class = "info">{{ $leitura->book_id}}</span>
    </div>
    <div class = "meta">
        <span class = "label">Avaliação:</span>
        <span class = "info">{{ $leitura->avaliacao}}</span>
    </div>
    <div class = "meta">
        <span class = "label">Lido em:</span>
        <span class = "info">{{ $leitura->lido_em}}</span>
    </div>
    <a href="{{ route('leitura.index')}}" class="btn-return"> Voltar </a>
</section>

