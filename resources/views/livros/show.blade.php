<x-slot name = "header">
    <h2 class = "font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{__('Livros')}}
    </h2>
</x-slot>
<section class = "details">
   <div class ="content">
    <div class = "meta">
        <span class = "label">ID:</span>
        <span class = "info">{{ $livros->id}}</span>
    </div>
    <div class = "meta">
        <span class = "label">Título:</span>
        <span class = "info">{{ $livros->titulo}}</span>
    </div>
    <div class = "meta">
        <span class = "label">Autor:</span>
        <span class = "info">{{ $livros->autor}}</span>
    </div>
    <div class = "meta">
        <span class = "label">Genêro:</span>
        <span class = "info">{{ $livros->genero_id}}</span>
    </div>

    <a href="{{ route('livros.index')}}" class="btn-return"> Voltar </a>
</section>

