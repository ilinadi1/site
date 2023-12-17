<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Авторизация</title>
</head>

<body>
    <x-header></x-header>
    <div class="container">
    <form action="/appLog" method="POST">
        @csrf
        <div class="registrBlock">
            <h3>Для входа в личный кабинет заполните следующие поля:</h3>
            <input type="email" placeholder="Почта" name="email">
            @error('email')
                     <div class="alert alert-danger alert-dismissible">
                             <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                    </div>
            @enderror
            <input type="password" placeholder="Пароль" name="password">
            @error('password')
                     <div class="alert alert-danger alert-dismissible">
                             <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                    </div>
            @enderror
            <button class="btn">Войти</button>
            <p class="hrefAccount">Вас нет в нашей системе?<a href="/registr">Зарегистрируйтесь</a></p>
        </div>
    </form>
    </div>
    <x-footer></x-footer>
</body>
</html>
