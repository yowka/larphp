<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('assets/images/netflix.ico')}}">
    <link rel="stylesheet" href="{{asset('assets/style/poster.css')}}">
    <title>Афиша</title>
</head>
<body>
    @include('nav-component')
    <div class="wrapper">
        <h1>Афиша</h1>
        <div class="movies-list">
            @foreach ($seances as $seance)
                <div class="movie-card">
                    <img src="{{ asset('/assets/images/resources/' . $seance->image)}}" alt="{{ $seance->title }}">
                    <h2>{{ $seance->title }}</h2>
                    <p>{{ $seance->description }}</p>
                    <a href="{{ route('poster.show', $seance->id) }}">Подробнее</a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
