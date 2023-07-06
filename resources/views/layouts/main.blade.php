<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Headers · Bootstrap v5.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style/headers.css" rel="stylesheet">
</head>
<body>
<main>
    <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
            <h1 class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">ТЕСТ САЙТ</span>
            </h1>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('main') }}" class="nav-link link-dark px-2" aria-current="page">ГЛАВНАЯ</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">ПРОДАТЬ</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">ИСТОРИЯ</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">СООБЩЕНИЯ</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">ПОМОЩЬ</a></li>
                @if(Auth::check())
                    <li class="nav-item"><a href="{{ route('user.profile') }}" class="nav-link link-dark px-2">ПРОФИЛЬ</a></li>
                @endif
            </ul>
        </div>
    </nav>
    <header class="py-3 mb-4 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center ">
            <form  class="d-flex align-items-center mb-1 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            @if(Auth::check())
            <a href="{{ route('user.profile') }}" class="d-block link-dark text-decoration-none" aria-expanded="false">
                <img src="images/userNoImg.png" alt="mdo" width="44" height="44" class="rounded-circle">
            </a>
            @endif
            <ul class="nav">
                @if(Auth::check())
                    <form action="{{ route('user.logout') }}" method="POST">
                       <p class="nav-link link-dark px-2"><input  type="submit" value="Выход"></p>
                       @csrf
                    </form>
                @else
                    <li class="nav-item"><a href="{{ route('main.authorization') }}" class="nav-link link-dark px-2">Авторизация</a></li>
                    <li class="nav-item"><a href="{{ route('main.registration') }}" class="nav-link link-dark px-2">Регистрация</a></li>
                @endif

            </ul>

        </div>
    </header>

    <div class="b-example-divider"></div>

    @yield('content')

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
