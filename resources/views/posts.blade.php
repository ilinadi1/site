<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Полезные советы</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <x-header></x-header>
    <div class="container">
        <a href="">По возрастанию</a>
        <a href="">По убыванию</a>
        @foreach ($posts as $post)
            <div class="col">
                <div class="card-index">
                    <img src="/storage/images/{{ $post->image }}" alt="Не прогрузилось">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->description }}</p>
                    <a href="/onePost/{{ $post->id }}">Читать полностью</a>
                </div>
            </div>
        @endforeach
    </div>
    <x-footer></x-footer>
</body>

</html>
