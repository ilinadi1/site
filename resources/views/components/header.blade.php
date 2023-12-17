<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/storage/images/logo.png" alt="Ошибочка вышла"></a>

        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/post"><img src="/storage/images/posts.png" alt="Ошибочка вышла">Полезная информация</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/categories">Посты</a>
          </li>
        </ul>
        <div>
            @guest
            <a href="/signUp"><img src="/storage/images/auth.png" alt="Ошибочка вышла"></a>
            @endguest
            @auth
            <a href="/logout"><img src="/storage/images/exit.png" alt="Ошибочка вышла"></a>
            @endauth
        </div>
    </div>
  </nav>
