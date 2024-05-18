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
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    Atte
                </a>
                <ul class="header-nav">
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
        </div>
    </header>

    <main>
        <div class="attendance-form__content">
            <div class="attendance-form__heading">
                <p>{{ Auth::user()->name }}さんお疲れ様です！</p>
            </div>
            <div class="attendance__form">
                <form action="/attendance/start" method="post">
                @csrf
                    <div class="form__group">
                        <button type="submit" name="work_start" class="attendance_button" @if($isWork_start) disabled @endif>出勤開始</button>
                    </div>
                </form>
                <form action="/attendance/end" method="post">
                @csrf
                    <div class="form__group">
                        <button type="submit" name="work_end" class="attendance_button" @if($isWork_end) disabled @endif>勤務終了</button>
                    </div>
                </form>
            </div>
            <div class="rest__form">
                <form action="/rest/start" method="post">
                @csrf
                    <div class="form__group">
                        <button type="submit" name="rest_start" class="attendance_button" @if($isRest_start) disabled @endif>休憩開始</button>
                    </div>
                </form>
                <form action="/rest/end" method="post">
                @csrf
                    <div class="form__group">
                        <button type="submit" name="rest_end" class="attendance_button" @if($isRest_end) disabled @endif>休憩開始</button>
                    </div>
                </form>
            </div>
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
