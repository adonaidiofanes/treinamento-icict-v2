<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Infrações</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h1>Infrações</h1>

            <a href="/infracoes/criar" class="btn btn-dark mb-2">
                Adicionar
            </a>

            <ul class="list-group">
                <?php foreach ($infracoes as $infracao): ?>
                    <li class="list-group-item">
                        <?= $infracao['tipo'] ?>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</body>
</html>