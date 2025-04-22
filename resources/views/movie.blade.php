<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('assets/images/netflix.ico')}}">
    <link rel="stylesheet" href="{{asset('assets/style/movie.css')}}">
    <title>Фильм</title>
</head>
<body>
@include('nav-component')
<main>
    <div class="wrapper">
        <h1>{{ $movie->title }}</h1>
        <img src="{{ asset('/assets/images/resources/' . $movie->image)}}" alt="{{ $movie->title }}">
        <p>{{ $movie->description }}</p>
        <p>Цена: {{ $movie->price }}$</p>
        <p>Длительность фильма в минутах: {{ $movie->duration }}</p>
        <p>Дата выхода: {{ $movie->show_date }}</p>
        <a href="{{ route('poster') }}">Назад к афише</a>
    </div>
</main>
</body>
</html>
