<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>お問い合わせフォーム</title>
    </head>
    <body>
        <header class="header">
            <h1 class="header__title">FashionablyLate</h1>
            @if (Route::currentRouteName() == 'login')
                <a href="/register" class="header__btn">register</a>
            @elseif (Route::currentRouteName() == 'register')
                <a href="/login" class="header__btn">login</a>
            @elseif (Route::currentRouteName() == 'admin')
                <a href="">logout</a>
            @endif
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>