<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mock Case</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />>
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
        <div class="register-form__content">
            <div class="register-form__heading">
                <h2>会員登録</h2>
            </div>
            <form class="form" action="/register" method="post">
                @csrf
                <div class="form__group">
                    <input class="form__input" type="text" name="name" id="name" placeholder="名前">
                    <p class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
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
                <div class="form__group">
                    <input class="form__input" type="password" name="password_confirmation" id="password" placeholder="確認用パスワード">
                    <p class="form__error">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
                <input class="form__btn-register" type="submit" value="会員登録">
                <div class="form__group-login">
                    <label class="form__label" for="login">アカウントをお持ちの方はこちらから</label>
                    <a class=login href="/login">ログイン</a>
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
</html>