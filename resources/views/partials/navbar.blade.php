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
        <a style="padding:5px 15px" class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" /></a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right main-menu">
          <!-- <li class="dropdown"><a href="profile.php"><img width="20%" src="data/avatars?= $theUser['avatar']; ?>" alt="imagen usuario">
            ?= $theUser['name']; ?></a></li> -->
          <li class="dropdown"><a href="/newsfeed">Inicio</a></li>
            <li class="dropdown"><a href="/profile">Mi perfil</a></li>
          <li class="dropdown"><a href="preguntas-frecuentes.php">FAQ</a></li>
            <li class="dropdown"><a href="/logout">Cerrar Sesión</a></li>
        
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
