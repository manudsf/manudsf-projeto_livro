<x-slot name = "header">
    <h2 class = "font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{__('users')}}
    </h2>
</x-slot>
<section class = "details">
   <div class ="content">
    <div class = "meta">
        <span class = "label">ID:</span>
        <span class = "info">{{ $user->id}}</span>
    </div>
    <div class = "meta">
        <span class = "label">Nome:</span>
        <span class = "info">{{ $user->nome}}</span>
    </div>
    <div class = "meta">
        <span class = "label">Email:</span>
        <span class = "info">{{ $user->email}}</span>
    </div>
    <div class = "meta">
        <span class = "label">Senha:</span>
        <span class = "info">{{ $userr->senha}}</span>
    </div>
    <a href="{{ route('users.index')}}" class="btn-return"> Voltar </a>
</section>

