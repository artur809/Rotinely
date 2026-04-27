<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinely</title>
    @vite('resources/css/app.css')
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container position-relative">
            <a href="#" class="navbar-brand mx-auto position-absolute start-50 translate-middle-x">
                <b style="font-size: 2.5rem;">Rotinely</b>
            </a>
            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link" style="font-size: 0.9rem;">Minhas Tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pesquisa') }}" class="nav-link" style="font-size: 0.9rem;">Pesquisar</a>
                    </li>
                </ul>
            </div>
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-outline-danger btn-sm" style="font-size: 0.75rem;">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="container">
            <div class="content pt-3">
                @yield('content')
            </div>
        </div>
    </div>

</div>
@vite('resources/js/app.js')
</body>
</html>