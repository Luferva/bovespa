<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <title> @yield('title')</title>

    <!-- Link CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/styles.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand"><img src="/img/logo-acoes.png" alt="BrApi"><strong>Ações Brasil</strong></a>
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Minhas Carteira</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Meu Perfil</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link"
                                    onclick="event.preventDefault(); 
                                this.closest('form').submit();">
                                    Sair
                                </a>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="btn btn-primary">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="btn btn-outline-primary">Cadastrar</a>
                        </li>
                    
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="conteiner-fluid">
            @yield('content')
        </div>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>



</html>
