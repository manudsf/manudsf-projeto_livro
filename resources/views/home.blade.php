<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro na Caixa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(135deg, #ffb3ba, #ffdfba, #bae1ff);
            color: #333; 
            padding: 100px 0;
            text-align: center;
        }

        .btn-custom {
            padding: 10px 20px;
            font-size: 1.2em;
            margin: 10px;
            transition: transform 0.2s;
            background-color: #ffb3ba;
            border: none;
            color: #fff;
        }

        .btn-custom:hover {
            transform: scale(1.1);
            background-color: #ffdfba;
            color: #333;
        }

        .card-custom {
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-custom img {
            border-radius: 10px;
            height: 200px; /* Altura fixa */
            object-fit: cover; /* Garante que a imagem preencha o espaço sem distorção */
        }

        .card-body h5 {
            color: #6f42c1; 
        }

        .card-body p {
            color: #333;
        }

        .btn-secondary {
            background-color: #ffb3ba;
            border: none;
            color: white; 
        }

        .btn-info {
            background-color: #bae1ff;
            border: none;
            color: white; 
        }

        .btn-primary {
            background-color: #ffdfba;
            border: none;
            color: white; 
        }

        .hero h1 {
            color: #333; 
        }

        .hero p {
            color: #555; 
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <div class="hero">
        <h1 class="display-4">Bem-vindo ao Projeto Livro na Caixa!</h1>
        <p class="lead">Registre suas leituras e avalie seus livros favoritos.</p>
        <a href="{{ route('livro.index') }}" class="btn btn-secondary btn-lg btn-custom">Explorar Livros</a>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-lg-3 mx-auto">
                <div class="card card-custom">
                    <img src="{{ asset('images/livros.jpg') }}" class="card-img-top" alt="Livros">
                    <div class="card-body">
                        <h5 class="card-title">Livros</h5>
                        <p class="card-text">Veja a lista de livros disponíveis e suas avaliações.</p>
                        <a href="{{ route('livro.index') }}" class="btn btn-secondary">Ver Livros</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mx-auto">
                <div class="card card-custom">
                    <img src="{{ asset('images/leituras.jpg') }}" class="card-img-top" alt="Leituras">
                    <div class="card-body">
                        <h5 class="card-title">Minhas Leituras</h5>
                        <p class="card-text">Veja as leituras que você já completou ou deseja iniciar.</p>
                        <a href="{{ route('leituras.index') }}" class="btn btn-info">Ver Leituras</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3 mx-auto">
                <div class="card card-custom">
                    <img src="{{ asset('images/generos.jpg') }}" class="card-img-top" alt="Gêneros">
                    <div class="card-body">
                        <h5 class="card-title">Buscar por Gêneros</h5>
                        <p class="card-text">Descubra livros por gênero e explore suas categorias favoritas.</p>
                        <a href="{{ route('genero.index') }}" class="btn btn-primary">Ver Gêneros</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
