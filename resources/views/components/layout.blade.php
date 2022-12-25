<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Series Control</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
<div class="container">
    <h1>{{ $title }}</h1>

    {{ $slot }}
</div>
@vite(['resources/js/app.js'])
</body>
</html>
