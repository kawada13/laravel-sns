<nav class="navbar navbar-expand-sm navbar-dark default-color">
  <a class="navbar-brand" href="#"><i class="fab fa-angellist"></i>Navbar</a>
  <ul class="navbar-nav ml-auto">
    @guest
    <li class="nav-item"><a href="{{ route('register')}}" class="nav-link">ユーザー登録</a></li>
    <li class="nav-item"><a href="#" class="nav-link">ログイン</a></li>
    @endguest
    @auth
    <li class="nav-item"><a href="#" class="nav-link"><i class="fab fa-apple"></i>投稿する</a></li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button" onclick="location.href=''">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}">
      @csrf
    </form>
    @endauth
  </ul>

</nav>|