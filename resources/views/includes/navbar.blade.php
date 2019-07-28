<header id="header">
  <nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a style="padding:5px 15px" class="navbar-brand" href="{{ route('home') }}"><img src="images/logo.png" alt="logo" /></a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right main-menu">
          <!-- <li class="dropdown"><a href="profile.php"><img width="20%" src="data/avatars?= $theUser['avatar']; ?>" alt="imagen usuario">
            ?= $theUser['name']; ?></a></li> -->
          <li class="dropdown"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="dropdown"><a href="{{ route('profile') }}">Mi perfil</a></li>
          <li class="dropdown"><a href="">FAQ</a></li>
            <li class="dropdown"><a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Cerrar sesión') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>

            <ul class="dropdown-menu page-list">

            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-right hidden-sm">
          <div class="form-group">
            <i class="icon ion-android-search"></i>
            <input type="text" class="form-control" placeholder="Buscar amigos, fotos, videos">
          </div>
        </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>
</header>
