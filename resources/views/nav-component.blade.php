<header>
    <link rel="icon" href="{{asset('assets/images/netflix.ico')}}">
    <link rel="stylesheet" href="{{asset('assets/style/style-nav.css')}}">
    <nav class="navigate-bar">
        <a href="/welcome"><img height="50" src="{{asset('assets/images/netflix.png')}}" alt="logo"/></a>
        <ul>
            <li><a href="/about">О нас</a></li>
            <li><a href="/poster">Афиша</a></li>
            <li><a href="/contact">Где нас найти?</a></li>
        </ul>
        <div class="navigate-auth">
            @guest
                <li><a href="{{ route('login') }}">Вход</a></li>
                <li><a href="{{ route('register') }}">Регистрация</a></li>
            @else
                <li>
                    Здравствуйте, {{ Auth::user()->name }}!
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Выход</button>
                    </form>
                </li>
            @endguest
        </div>

    </nav>
</header>
