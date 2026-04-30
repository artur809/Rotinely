<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rotinely</title>
    @vite(['resources/css/app.css', 'resources/css/auth.css'])
</head>
<body style="margin: 0; padding: 0; height: 100vh; display: flex;">

    <div class="corDark" style="width: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px;">
        <a class="rotinely" style="text-decoration: none; font-size: 7rem;"><b>Rotinely</b><i class="bi bi-check-circle"></i></a>
        <p style="color: #DCFCE7; font-size: 1.5rem; margin: 0;">Organize suas tarefas</p>
    </div>

    <div class="corLight" style="width: 50%; display: flex; align-items: center; justify-content: center;">
        <div style="width: 70%;">
            <div class="card border-0" style="padding: 3rem 2rem; background: transparent;">
                @yield('form')
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>