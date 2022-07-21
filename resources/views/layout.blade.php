<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style class="text/css">
        .jumbotron {
            padding: 4rem 2rem;
            margin-bottom: 2rem;
            background-color: grey;
            border-radius: .3rem;
        }

    </style>
    <title>Index</title>
</head>
<body>
<div class=" container">
    <div class="jumbotron">
        <h1 class="text-uppercase">@yield('cabecalho')</h1>
    </div>

    @yield('conteudo')

</div>
</body>
</html>
