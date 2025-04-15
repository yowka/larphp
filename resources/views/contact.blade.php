<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/style/contact.css')}}">
    <link rel="icon" href="{{asset('assets/images/netflix.ico')}}">
    <title>Контакты</title>
</head>
<body>
    <header>
        @include('nav-component')
    </header>
    <main>
        <div class="wrapper">
            <article>
                <section class="contacts">
                    <p><span>Адрес:</span> Томск, улица Суворова, 17</p>
                    <p><span>Телефон:</span> <a href="tel:+79132223344">+7 (913) 222-33-44</a></p>
                    <p><span>Email:</span> <a href="mailto:NeNetFlix@yandex.ru">NeNetFlix@yandex.ru</a></p>
                </section>
                <section>
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4d01b942a2c40a48edf1932fdf574a80f5f7f842ece015e96b967611ec81d300&amp;source=constructor" width="700" height="300" ></iframe>
                </section>
            </article>
        </div>
    </main>
</body>
</html>
