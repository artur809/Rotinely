<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rotinely</title>
    @vite(['resources/css/app.css', 'resources/css/auth.css'])
</head>
<body class="auth-body">

    <div class="auth-left corDark">
        <a class="rotinely" href="#"><b>Rotinely</b><i class="bi bi-check-circle"></i></a>
        <p>Organize suas tarefas</p>
    </div>

    <div class="auth-right corLight">
        <div class="auth-form-wrapper">
            <div class="card border-0" style="padding: 3rem 2rem; background: transparent;">
                @yield('form')
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>