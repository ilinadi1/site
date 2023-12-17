<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <x-header></x-header>
    <div class="container containerAcc">
        <div class="navAcc">
            <div class="btnAcc">Редактировать профиль</div>
            <div class="btnAcc">Мой прогресс</div>
        </div>
        <div class="RedaktionAcc">
            <input type="file" name="imgAccount">
            @error('imgAccount')
                     <div class="alert alert-danger alert-dismissible">
                             <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                    </div>
            @enderror
            <div class="inputAccContainer">
                <input class="inputAcc" type="text" placeholder="Старое имя" name="oldName">
                @error('oldName')
                     <div class="alert alert-danger alert-dismissible">
                             <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                    </div>
                @enderror
                <input class="inputAcc" type="text" placeholder="Старый логин" name="oldLogin">
                @error('oldLogin')
                     <div class="alert alert-danger alert-dismissible">
                             <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                    </div>
                @enderror
                <input class="inputAcc" type="date" placeholder="Дата рождения" name="dateBirthday">
                @error('dateBirthday')
                     <div class="alert alert-danger alert-dismissible">
                             <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                    </div>
                @enderror
            </div>
            <div class="">
                <input class="inputAcc" type="email" placeholder="Почта" name="email">
                @error('email')
                     <div class="alert alert-danger alert-dismissible">
                             <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                    </div>
                @enderror
                <input class="inputAcc" type="text" placeholder="Номер телефона" name="numPhone">
                @error('numPhone')
                     <div class="alert alert-danger alert-dismissible">
                             <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                    </div>
                @enderror
                <input class="inputAcc" type="password" placeholder="Пароль" name="password">
                @error('password')
                     <div class="alert alert-danger alert-dismissible">
                             <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                    </div>
                @enderror
            </div>
            <div class="btnRedaktionAcc">
                <button class="btn">Сохранить изменения</button>
            </div>

        </div>
    </div>
<x-footer></x-footer>
</body>
</html>