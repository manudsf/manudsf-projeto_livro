<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Meu Projeto Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Bem-vindo ao Meu Projeto Laravel</h1>
        <p>Esta é uma página inicial personalizada!</p>

        <a href="{{ route('genero.index') }}" class="btn btn-primary">Ver Gêneros</a>
        <a href="{{ route('livro.index') }}" class="btn btn-secondary">Ver Livros</a>
        <a href="{{ route('leituras.index') }}" class="btn btn-info">Ver Leituras</a>
        <a href="{{ route('status.index') }}" class="btn btn-success">Ver Status</a>
    </div>
</body>
</html>
