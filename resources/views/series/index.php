<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
<div id="carouselExampleControlsNoTouching" class="container bg-secondary text-white">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <h1>Lista de Séries</h1>
            <p>Lista de Séries Cadastradas</p>
        </div>
    </div> 
</div>
    <div class="container mt-2">
        <ul class="list-group">
            <?php foreach ($series as $serie): ?>
                <li class="list-group-item"><?= $serie; ?></li>
            
            <?php endforeach; ?>
        </ul>
    </div>
    
</body>
</html>