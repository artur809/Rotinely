<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinely</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @vite(['resources/css/app.css', 'resources/css/home.css'])
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    @include('partes.navBar.nav')

    <div class="content-wrapper fundo-gradiente">
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