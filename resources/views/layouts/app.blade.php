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

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container position-relative">

            <!-- Logo -->
            <a href="#" class="navbar-brand mx-auto position-absolute start-50 translate-middle-x">
                <b style="font-size: 2.5rem;">Rotinely</b>
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="font-size: 0.9rem;">Minhas Tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="font-size: 0.9rem;">Pesquisar</a>
                    </li>
                </ul>
            </div>

            <!-- Logout -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item">
                    <a href="#" class="btn btn-outline-danger btn-sm" style="font-size: 0.75rem;">Logout</a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content -->
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