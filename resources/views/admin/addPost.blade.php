<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <x-header-admin></x-header-admin>
    <div class="container">
        <form action="/admin/addPostAdmin/createPost" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Наименование поста</label>
                <input type="text" name="titlePost" class="form-control" id="exampleFormControlInput1">
                @error('titlePost')
                <div class="alert alert-danger alert-dismissible">
                        <div class="alert-text">
                           {{ $message }}
                           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                       </div>
               </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Изображение</label>
                <input class="form-control" name="imgPost" type="file" id="formFile">
                @error('imgPost')
                <div class="alert alert-danger alert-dismissible">
                        <div class="alert-text">
                           {{ $message }}
                           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                       </div>
               </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Категория</label>
                <select name="categorySelect">
                    @foreach ($category as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                    @endforeach
                </select>
                @error('categorySelect')
                <div class="alert alert-danger alert-dismissible">
                        <div class="alert-text">
                           {{ $message }}
                           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                       </div>
               </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                <textarea class="form-control" name="descriptionPost" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('descriptionPost')
                <div class="alert alert-danger alert-dismissible">
                        <div class="alert-text">
                           {{ $message }}
                           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                       </div>
               </div>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Опубликовать</button>
        </form>
    </div>
</body>
</html>

