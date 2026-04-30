<nav class="main-header navbar navbar-expand-md corDark">
    <div class="container-fluid position-relative">
        <a href="#" class="navbar-brand mx-auto position-absolute start-50 translate-middle-x">
            <b class="rotinely">Rotinely<i class="bi bi-check-circle"></i></b>
        </a>
        <button class="navbar-toggler order-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-2" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link" style="font-size: 0.9rem; color: white;">Minhas Tarefas</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pesquisa') }}" class="nav-link" style="font-size: 0.9rem; color: white;">Pesquisar</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav order-3 ms-auto me-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle p-0" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle fs-3" style="color: white;"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('perfil') }}">Ver perfil</a>
                    <a class="dropdown-item" href="{{ route('admin') }}">Painel Admin</a>
                    <li><a class="dropdown-item text-danger" href="{{ route('login') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>