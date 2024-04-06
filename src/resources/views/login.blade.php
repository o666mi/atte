<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mock Case</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Atte
            </a>
        </div>
    </header>

    <main>
        <div class="login-form__content">
            <div class="login-form__heading">
                <h2>ログイン</h2>
            </div>
            <form class="form" action="/login" method="post">
            @csrf
                <div class="form__group">
                    <input class="form__input" type="mail" name="email" id="email" placeholder="メールアドレス">
                    <p class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="form__group">
                    <input class="form__input" type="password" name="password" id="password" placeholder="パスワード">
                    <p class="form__error">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
                <input class="form__btn-login" type="submit" value="ログイン">
                <div class="form__group-register">
                    <label class="form__label" for="register">アカウントをお持ちでない方はこちらから</label>
                    <a class=register href="/register">会員登録</a>
                </div>
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