<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Infrações</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body>

    <div class="container">

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a href="/infracoes" class="navbar-brand">Infrações</a>
    
            @auth
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/sair">Sair</a>
                    </li>
                </ul>
            @endauth

            @guest
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/entrar">Entrar</a>
                    </li>
                </ul>
            @endguest

        </nav>

        <div class="jumbotron">
            <h1>
                @yield('cabecalho')
            </h1>

            @yield('conteudo')

        </div>
    </div>

</body>
</html>