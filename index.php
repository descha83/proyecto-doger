<!-- <!DOCTYPE html> -->
<?php
require_once "register-login-controller.php";
require_once "register.php";
require_once "partials/head.php";
if (!isset($emailUserName)) {
  $emailUserName = "";
}
 ?>
<!-- <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,900');
</style>
    <title>Dogers</title>

  </head> -->

  <body>
    <div class="content">

      <div class="container">

        <header>

        <section class="row cabecera">
          <article class="col-xl-7 col-lg-6 col-md-7 col-sm-12 col-xs-12 logo-tit">
            <img class="imagen" width="90%" src="imagenes/logo-final1.png" alt="Dogers logo">
          </article>

          <article class="col-xl-5 col-lg-6 col-md-5 col-sm-12 col-xs-12 form-login">

            <form class="formulario-ingreso" action="login.php" method="post">
              <br>
              <h3 class="ingreso"> Ingresa a tu cuenta</h3>
              <div class="br">
                <br>
                <br>
              </div>

            <div class="email-ingreso">
              <p>
              <label for="email"></label>
              <!--aca tengo al email o al usuario en emailUserName  -->
              <input
                type="text"
                name="emailUserName"
                placeholder="Email o Nombre de usuario"
                class="form-control <?= isset($errorsInLogin['emailUserName']) ? 'is-invalid' : null ?>"
                value="<?= $emailUserName; ?>"
                required
              >
              <div class="invalid-feedback">
                <?= isset($errorsInLogin['emailUserName']) ? $errorsInLogin['emailUserName'] : null; ?>
              </div>
              </p>
            </div>

            <div class="formulario-password">
              <p>
              <label for="password"></label>
              <input
                type="password"
                name="password"
                placeholder="Contraseña"
                class="form-control <?= isset($errorsInLogin['password']) ? 'is-invalid' : null ?>"
                required
              >
              <div class="invalid-feedback">
                <?= isset($errorsInLogin['password']) ? $errorsInLogin['password'] : null; ?>
              </div>
              </p>
            </div>
            <input type="hidden" name="tipo" value="login">
            <button class="btn btn-warning btn-sm bt-inicio " type="submit" name="button">Iniciar sesion</button>
            <a class="col-lg-7 olv" href=# >¿Olvidaste tu contraseña?</a>
            <div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="rememberUser">
									Recordarme
							  </label>
							</div>
            </form>
          </article>
        </section>
        </header>

        <div class="col-xl-12 color">
          <br>
        </div>
        <div class="col-xl-12 bg-transparent">
          <br>
        </div>

          <div class="parte-media">
      <section class="row fondo-medio">
          <article class="col-xl-9 col-lg-9 slaide">
            <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/dogers1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagenes/dogers2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagenes/dogers3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
          </article>
          <article class="col-xl-3 col-lg-3 reg-index">
            <h2 class="form-registro">REGISTRATE</h2>
             <form class="registro" action="index.php" method="post" enctype="multipart/form-data">
               <p class="registro-espacio">

                <label for="name"></label>
                <input
                  type="text"
                  name="name"
                  placeholder="Nombre Completo"
                  class="form-control <?= isset($errorsInRegister['name']) ? 'is-invalid' : null ?>"
                  value="<?= $name; ?>"
                  required
                >
                <div class="invalid-feedback">
                  <?= isset($errorsInRegister['name']) ? $errorsInRegister['name'] : null; ?>
                </div>
               </p>
               <p class="registro-espacio">
                <label for="user"></label>

                <input
                  type="text"
                  name="userName"
                  placeholder="Nombre Usuario"
                  class="form-control <?= isset($errorsInRegister['userName']) ? 'is-invalid' : null ?>"
                  value="<?= $userName; ?>"
                  required
                >
                <div class="invalid-feedback">
                  <?= isset($errorsInRegister['userName']) ? $errorsInRegister['userName'] : null; ?>
                </div>
               </p>
               <p class="registro-espacio">
                <label for="email"></label>
                <input
									type="text"
									name="email"
                  placeholder="Email"
									class="form-control <?= isset($errorsInRegister['email']) ? 'is-invalid' : null ?>"
									value="<?= $email; ?>"
                  required
								>
								<div class="invalid-feedback">
          				<?= isset($errorsInRegister['email']) ? $errorsInRegister['email'] : null; ?>
        				</div>
               </p>
               <p class="registro-espacio">
                <label for="avatar"></label>
                <input
                  type="file"
                  name="avatar"
                  class="form-control <?= isset($errorsInRegister['avatar']) ? 'is-invalid' : null; ?>"
                  required
                >
                <label class=""></label>
                <div class="invalid-feedback">
                  <?= isset($errorsInRegister['avatar']) ? $errorsInRegister['avatar'] : null; ?>
                </div>
               </p>
               <p class="registro-espacio">
                <label for="password"></label>
                <input
                  type="password"
                  name="password"
                  placeholder="Contraseña"
                  class="form-control <?= isset($errorsInRegister['password']) ? 'is-invalid' : null ?>"
                  required
                >
                <div class="invalid-feedback">
                  <?= isset($errorsInRegister['password']) ? $errorsInRegister['password'] : null; ?>
                </div>
               </p>
               <p class="registro-espacio">
                <label for="rePassword"></label>
                <input
									type="password"
									name="rePassword"
                  placeholder="Repetir contraseña"
									class="form-control <?= isset($errorsInRegister['rePassword']) ? 'is-invalid' : null; ?>"
                  required
								>
								<div class="invalid-feedback">
          				<?= isset($errorsInRegister['rePassword']) ? $errorsInRegister['rePassword'] : null; ?>
        				</div>
               </p>
               <p class="registro-espacio">

                 <div class="form-group">
								<label><b>País de nacimiento:</b></label>
								<select
									name="country"
									class="form-control <?= isset($errorsInRegister['country']) ? 'is-invalid' : null; ?>"
								>
									<option value="">Elegí un país</option>
									<?php foreach ($countries as $code => $country): ?>
										<option
											value="<?= $code ?>"
											<?= $code == $countryFromPost ? 'selected' : null; ?>>

											<?= $country ?>
										</option>
									<?php endforeach; ?>
								</select>
								<div class="invalid-feedback">
          				<?= isset($errorsInRegister['country']) ? $errorsInRegister['country'] : null; ?>
        				</div>
							</div>
            </p>

            <input type="hidden" name="tipo" value="register">
             <button class="btn btn-warning btn-xl bt-registro" type="submit" name="button">Registrate</button>
</form>
          </article>
        </section>

        <div class="col-xl-12 color ">
          <br>
        </div>

        <section class="row">
          <article class="col-xl-12">
            <h3 class="tit-nosotros">Nosotros</h3>
            <p class="notrotres">Nuestra red social esta destinada a personas que aman a sus mascotas y quieren contactarse con gente para: pasear a sus fieles amigos en grupos, coordinar citas de juego , contarse tips y datos de interes ,etc.
               Te permite establecer dias , horarios y zonas de encuentro para contactarte con personas que tengan en comun el amor por los animales.
               Facilita a intercambiar informacion tal como cuidados para tu mascota, posteos, videos, informacion de salud, consejos, denuncias, adopcion, etc.</p>
          </article>
        </section>

        <div class="col-xl-12 bg-white">
          <br>
        </div>
<?php require_once "partials/footer.php";  ?>

        <!-- <footer class="row bg-pie ">

          <section class= "col-xl-12 pie-pag">
            <a class="pie"href="#">Registrate</a>
            <a class="pie"href="#">Inicia Sesion</a>
            <a class="pie"href="#">Preguntas Frecuentes</a>
            <a class="pie"href="#">Terminos y Condiciones</a>
          </section>

        </footer> -->
        <div class="col-xl-12 bg-white">
          <br>
        </div>

         </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
  </div>

</html>
