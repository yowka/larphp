<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
<h1>Регистрация</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf
    <label for="name">Имя:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="surname">Фамилия:</label>
    <input type="text" name="surname" id="surname" required><br>

    <label for="patronymic">Отчество:</label>
    <input type="text" name="patronymic" id="patronymic"><br>

    <label for="login">Логин:</label>
    <input type="text" name="login" id="login" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password" required><br>

    <label for="password_confirmation">Подтвердите пароль:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" required><br>

    <label>
        <input type="checkbox" name="rules" required> Я согласен с правилами
    </label><br>

    <button type="submit">Зарегистрироваться</button>
</form>
</body>
</html>
