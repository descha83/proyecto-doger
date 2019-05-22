<?php
	$theUser = $_SESSION['userLoged'];
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <style>
      @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,900');
    </style>
    <title>Perfil Doger</title>
  </head>

  <body>

<div class="content">

<div class="container-perfil">
  <header>
    <section class="row cabecera-perfil">
     <article class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 logo-tit">

        <article class="logoynombre">
          <img width="100%"src="imagenes/logo-final.png" alt="Dogers-logo">
        </article>

      </article>
      <article class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12 user ">

          <h4 class="nombre-usuario">Hola <?= $theUser['name']; ?></h4>

              <img width="147px" height="147px" class="img-usuario"src="data/avatars/<?= $theUser['avatar']; ?>" alt="Foto de perfil">

      </article>
    </section>

  </header>

  <div class="col-xl-12 bg-naranja">
    <br>
  </div>

 <div class="cuerpo">
 <nav class="navbar-text pull-right  col-xl-12 main-nav">
   <a class="navbar-link" href="profile.php">Perfil</a>
   <a class="navbar-link" href="#">Archivo</a>
   <a class="navbar-link" href="#">Mis fotos</a>
   <a class="navbar-link" href="#">Mis videos</a>
   <a class="navbar-link"href="edit-user.php">Editar perfil</a>
	 <a class="navbar-link" href="logout.php">Salir</a>
 </nav>

  <div class="col-xl-12 bg-naranja">
    <br>
  </div>
