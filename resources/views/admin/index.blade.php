<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Администратирование</title>
</head>
<body>
    <x-header-admin></x-header-admin>
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 g-3">
        @forelse ( $posts as $item )
        <div class="col">
            <div class="card-index-admin">
                <img src="/public/storage/images/{{$item->image}}" alt="Не прогрузилось">
                <h2>{{$item->title}}</h2>
                <p>{{$item->description}}</p>
                <div class="mb-3"><a href="/admin/edit/{{$item->id}}">Редактировать</a></div>
                <div><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">Удалить</button></div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$item->id}}" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel{{$item->id}}">Удаление поста</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    Вы уверены, что хотите удалить пост “Почему худеть полезно”?
                </div>
                <div class="modal-footer">
                    <a href="/admin/delete/{{$item->id}}" class="btn btn-primary">Да, уверен</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>

                </div>
              </div>
            </div>
        </div>
        @empty
            <h1>Здесь ничего нет</h1>
        @endforelse
    </div>
    {{$posts->withQueryString()->links('pagination::bootstrap-5')}}
    </div>
</body>
</html>

