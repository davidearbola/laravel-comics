<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel Comics</title>
</head>

<body>
    <header>
        @include('partials.header')
    </header>
    <main>
        <p>Questa è la pagina About</p>
        <h1>{{ $comics[1]['title'] }}</h1>
        <p>{{ $comics[1]['description'] }}</p>
        <img src="{{ $comics[1]['thumb'] }}">
    </main>
    <footer>
        @include('partials.linkFooter')
        @include('partials.socialFooter')
    </footer>
</body>

</html>
