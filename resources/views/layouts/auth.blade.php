<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/css/auth.css'])
    
</head>
<body>
    
    <div class="login-page corPrimaria" >
       <div class="login-box">
        <div class="login-logo">
        <a class="rotinely"><b>Rotinely</b></a>
      </div>
      <div class="card">
        @yield('form')
      </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>