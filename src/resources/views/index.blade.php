<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mock Case</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Atte
            </a>
            <ul>
                @if (Auth::check())
                <li class="heder-nav__item">
                    <a class="heder-nav__link" href="/">ホーム</a>
                </li>
                <li class="heder-nav__item">
                    <a class="heder-nav__link" href="/attendance">日付一覧</a>
                </li>
                <li class="heder-nav__item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="header-nav__button">ログアウト</button>
                    </form>
                </li>
                @endif
            </ul>
        </div>
    </header>

    <main>
        <p>{{ Auth::user()->name }}さんお疲れ様です！</p>
        <div class="work-form">
            <form action="/attendance/start" method="post">
                @csrf
                <input type="button" id="btn1" value="勤務開始">
            </form>
            <form action="/attendance/end" method="post">
                @csrf
                <input type="button" id="btn2" value="勤務終了">
            </form>
            <form action="/rest/start" method="post">
                @csrf
                <input type="button" id="btn3" value="休憩開始">
            </form>
            <form action="/rest/end" method="post">
                @csrf
                <input type="button" id="btn4" value="休憩終了">
            </form>
        </div>
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <a class="footer__logo" href="">
                Atte,inc.
            </a>
        </div>
    </footer>
</body>
