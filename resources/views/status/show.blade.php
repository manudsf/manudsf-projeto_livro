<x-slot name = "header">
    <h2 class = "font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{__('Status')}}
    </h2>
</x-slot>
<section class = "details">
   <div class ="content">
    <div class = "meta">
        <span class = "label">ID:</span>
        <span class = "info">{{ $status->id}}</span>
    </div>
    <div class = "meta">
        <span class = "label">Nome:</span>
        <span class = "info">{{ $status->nome}}</span>
    </div>
    <a href="{{ route('status.index')}}" class="btn-return"> Voltar </a>
</section>

