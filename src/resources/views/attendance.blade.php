<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mock Case</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
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
        <div class="date-form__content">
        <nav class="date__pager">
            <div class="date__pagination">
                <a class="prev-page-numbers__date" href=http://localhost/attendance><</a>
                <a class="page-numbers__date" href="https://localhost/attendance/page/2">2024-04-01</a>
                <a class="next-page-numbers__date" href="https://localhost/attendance/page/2">></a>
            </div>
        </nav>
        <table class="attendance__table">
            <tr class="attendance__row">
                <th class="attendance__label">名前</th>
                <th class="attendance__label">勤務開始</th>
                <th class="attendance__label">勤務終了</th>
                <th class="attendance__label">休憩時間</th>
                <th class="attendance__label">勤務時間</th>
            </tr>
            @foreach($attendances as $attendance)
            <tr class="attendance__row">
                <td class="attendance__date">{{$attendance->userId}}</td>
                <td class="attendance__date">{{$attendance->work_start}}</td>
                <td class="attendance__date">{{$attendance->work_end}}</td>
            </tr>
            @endforeach
        </table>
        <nav class="pager">
            <div class="pagination">
                <a class="page-numbers" href=http://localhost/attendance><</a>
                <span class="page-numbers__current">1</span>
                <a class="page-numbers" href="https://localhost/attendance/page/2">2</a>
                <a class="page-numbers" href="https://localhost/attendance/page/3">3</a>
                <a class="page-numbers" href="https://localhost/attendance/page/4">4</a>
                <a class="page-numbers" href="https://localhost/attendance/page/5">5</a>
                <a class="page-numbers" href="https://localhost/attendance/page/6">6</a>
                <a class="page-numbers" href="https://localhost/attendance/page/7">7</a>
                <a class="page-numbers" href="https://localhost/attendance/page/8">8</a>
                <a class="page-numbers" href="https://localhost/attendance/page/9">9</a>
                <a class="page-numbers" href="https://localhost/attendance/page/10">10</a>
                <span class="page-numbers__dots">…</span>
                <a class="page-numbers" href="https://localhost/attendance/page/20">20</a>
                <a class="page-numbers" href="https://localhost/attendance/page/21">21</a>
                <a class="next-page-numbers" href="https://localhost/attendance/page/2">></a>
            </div>
        </nav>
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