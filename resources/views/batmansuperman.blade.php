<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="bg-white">
        @include('partials.header')
    </header>
    <main>
        <div class="full_box">
            <div class="my_box_container py-5">
                <div class="row">
                    <div class="col-5">
                        <img class="w-100" src="{{ $comics[6]['thumb'] }}">
                    </div>
                    <div class="col-7">
                        <h3>{{ $comics[6]['title'] }}</h3>
                        <p>{{ $comics[6]['description'] }}</p>
                        <p>{{ $comics[6]['price'] }}</p>
                        <span>{{ $comics[6]['series'] }}</span><br>
                        <span>{{ $comics[6]['sale_date'] }}</span><br>
                        <span>{{ $comics[6]['type'] }}</span><br>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        @include('partials.linkFooter')
        @include('partials.socialFooter')
    </footer>
</body>

</html>
