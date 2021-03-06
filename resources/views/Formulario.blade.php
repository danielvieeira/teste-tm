<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Teste</title>
    </head>
    <body>
        <div class="col-sm-12 mb-3">
            <div class="row justify-content-center no-glutters">
                <div class="col-11 col-sm11 col-md-10 col-lg-8">
                    <a href="#">
                        <img src="<?= asset('img/banner.jpg') ?>" alt="Banner genérico" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>

        <div class="container col-11 col-sm-11 col-md-8 col-lg-5">
            <div class="card justify-content-center">
                <div class="card-body">
                    <h4 class="card-title">Formulário de submissão</h4>
                    <form action="/" method="POST" class="col-sm-12">
                        @csrf
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger"><?= $error ?></div>
                            @endforeach
                        @endif
                        <div class="form-group">
                            <label for="nome">Nome Completo:</label>
                            <input 
                                name="nome"
                                type="text"
                                class="form-control"
                                id="nome"
                                placeholder="Ex: João da Silva"
                                value="<?= (empty($input['nome'])) ? '' : $input['nome'] ?>"
                            >
                        </div>
                        <div class="form-group">
                            <label for="texto">Texto:</label>
                            <textarea
                                name="texto"
                                rows="4"
                                class="form-control"
                                id="texto"
                                placeholder="Ex: A resposta para a vida, o universo e tudo mais."
                            ><?= (empty($input['texto'])) ? '' : $input['texto'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submeter</button>
                        </div>
                    </form>
                </div>
            </div>

            @if(!empty($dados))
                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="card-title">Dados Submetidos</h4>
                        <p class="card-text"><strong>Nome:</strong> <?= $dados['nome'] ?></p>
                        <p class="card-text"><strong>Texto:</strong> <?= $dados['texto'] ?></p>
                    </div>
                </div>
            @endif
        </div>
    </body>
</html>
