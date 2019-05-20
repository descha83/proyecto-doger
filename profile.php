<!DOCTYPE html>
<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';

	// Si no está logueda la persona la redirijo al login
	if ( !isLogged() ) {
		header('location: login.php');
		exit;
	}
	$pageTitle = 'Profile';
	// require_once 'partials/head.php';

?>
	<!-- ?php require_once 'partials/navbar.php'; ?> -->


<!-- ?php require_once 'partials/footer.php'; ?> -->
<?php 	require_once "partials/header-profile.php"; ?>

  <div class="col-xl-12 cuerpo-medio">
    <div class="row">

      <section class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-7 comentarios">
        <article class="nombre-posteo"><p>Nuevo posteo</p></article>

        <form class="nuevo-posteo" action="index.php" method="post">

          <button class="btn btn-info foto" type="button" name="button">Foto</button>
          <button class="btn btn-info video" type="button" name="button">Video</button>
          <input class="ventana-posteo" type="text" name="" value="" placeholder="¿Que querés contarnos hoy?">
          <button class="btn btn-info enviar" type="button" name="button">Enviar</button>

        </form>
      </section>

    <section class="col-xl-4 col-lg-4 col-md-4 offset-1 col-sm-4 col-xs-4 editar-perfil">
     <article class="nombre-seccion"><p>Algo sobre mi </p></article>
    <button class="btn btn-info btn-editar"type="button" name="button">Editar perfil</button>
    <article class="presentacion">
      <p class="mi-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </article>
    </section>


    </div>

      <div class="col-xl-12 bg-naranja">
        <br>
      </div>

    <div class="row">
    <section class="col-xl-7 col-lg-7 col-md-7 col-sm-8 col-xs-12 timeline">
        <article class="nombre-public"><p>Nueva publicacion</p></article>
      <section class="publicacion">
        <img <img src="imagenes/perfil-usuario.png" width="30px" alt="contacto">>
        <h6>Nombre usuario</h6>
        <p>Fecha y hora</p>
        <p>texto ejemplo, comentario o publicacion //Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde ...</p>
      </section>

      <section class="publicacion">
        <img <img src="imagenes/perfil-usuario.png" width="30px" alt="contacto">>
        <h6>Nombre usuario</h6>
        <p>Fecha y hora</p>
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/CvixRV5DfXk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </section>

      <section class="publicacion">
        <img <img src="imagenes/perfil-usuario.png" width="30px" alt="contacto">>
        <h6>Nombre usuario</h6>
        <p>Fecha y hora</p>
        <p>texto ejemplo, comentario o publicacion //Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde ...</p>
      </section>

      <section class="publicacion">
        <img <img src="imagenes/perfil-usuario.png" width="30px" alt="contacto">>
        <h6>Nombre usuario</h6>
        <p>Fecha y hora</p>
        <img src="imagenes/dogers1.png" width="100%" alt="foto mascota">
        <p>texto ejemplo, comentario o publicacion.</p>
      </section>

    </section>

    <section class="col-xl-4 col-lg-4 col-md-4 offset-1 col-sm-3 col-xs-12 contactos">
      <article class="nombre-contactos"><p>Mis amigos</p></article>
      <ul class="lista-contactos">
        <li><img src="imagenes/perfil-usuario.png" width="30px" alt="contacto"> Nombre y apellido </li>
        <br>
        <li><img src="imagenes/perfil-usuario.png" width="30px" alt="contacto"> Nombre y apellido </li>
        <br>
        <li><img src="imagenes/perfil-usuario.png" width="30px" alt="contacto"> Nombre y apellido </li>
        <br>
        <li><img src="imagenes/perfil-usuario.png" width="30px" alt="contacto"> Nombre y apellido </li>
        <br>
        <li><img src="imagenes/perfil-usuario.png" width="30px" alt="contacto"> Nombre y apellido </li>
        <br>
        <li><img src="imagenes/perfil-usuario.png" width="30px" alt="contacto"> Nombre y apellido </li>
        <br>
        <li><img src="imagenes/perfil-usuario.png" width="30px" alt="contacto"> Nombre y apellido </li>
        <br>
        <li><img src="imagenes/perfil-usuario.png" width="30px" alt="contacto"> Nombre y apellido </li>
        <br>
        <li><img src="imagenes/perfil-usuario.png" width="30px" alt="contacto"> Nombre y apellido </li>
        <br>
        <li><img src="imagenes/perfil-usuario.png" width="30px" alt="contacto"> Nombre y apellido </li>
      </ul>
    </section>
    </div>
  </div>
  <div class="col-xl-12 bg-naranja">
    <br>
  </div>
  <?php require_once "partials/footer.php";  ?>
  <!-- <footer class="row bg-pie pie-perfil ">

    <section class= "col-xl-12 pie-pag">
      <a class="pie"href="#">Registrate</a>
      <a class="pie"href="#">Inicia Sesion</a>
      <a class="pie"href="#">Preguntas Frecuentes</a>
      <a class="pie"href="#">Terminos y Condiciones</a>
    </section>

  </footer> -->
</div>
</div>

  </body>
</html>
