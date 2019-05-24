<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	$pageTitle = 'Iniciá sesión';
	require_once 'partials/head.php';
	require_once 'register-login-controller.php';
	// Si está logueda la persona la redirijo al profile
	if ( isLogged() ) {
		header('location: perfil-usuario.php');
		exit;
	}
	// Generamos nuestro array de errores interno
	$errorsInLogin = [];
	// Persistimos el email o el usuario
	$emailUserName = '';
	if ($_POST) {
		if ($_POST["tipo"]=="login") {
			// code...

		// Persistimos el email o el usuario con lo vino por $_POST
		$emailUserName = trim($_POST['emailUserName']);
		// La función loginValidate() nos retorna el array de errores que almacenamos en esta variable
		$errorsInLogin = loginValidate();
		if ( !$errorsInLogin ) {
			// Traemos al usuario (sea por mail o por usuario )que vamos a loguear
			$userToLogin = getUserByEmail($emailUserName);
			// Preguntamos si quiere ser recordado
			if ( isset($_POST['rememberUser']) ) {
				setcookie('userLoged', $emailUserName, time() + 3000);
			}
			// Logeamos al usuario
			login($userToLogin);
		}
	}
	}
?>

<body>
	<section id="banner">
		<div class="container">

			<!-- Formulario
			================================================= -->
			<div class="sign-up-form" style="min-height: 0px">
				<a href="index.html" class="logo"><img src="images/logo.png" alt="Dogers"/></a>
				<h2 class="text-white" style="font-size:2em">¡Sé parte de la comunidad de mascotas más grande!</h2>
				<div class="line-divider"></div>
				<div class="form-wrapper">
					<p class="signup-text">Iniciá sesión y conectate con Dogers de todo el mundo </p>
					<form class="formulario-ingreso" action="login.php" method="post">
						<fieldset class="form-group">
							<label>E-mail o Nombre de usuario:</label>
							<input type="text" name="emailUserName" class="form-control <?= isset($errorsInLogin['emailUserName']) ? 'is-invalid' : null ?>" value="<?= $emailUserName; ?>" required>
							<div class="invalid-feedback">
								<?= isset($errorsInLogin['emailUserName']) ? $errorsInLogin['emailUserName'] : null; ?>
							</div>
						</fieldset>
						<fieldset class="form-group">
							<label>Contraseña:</label>
							<input type="password" name="password" class="form-control <?= isset($errorsInLogin['password']) ? 'is-invalid' : null ?>" required>
							<div class="invalid-feedback">
								<?= isset($errorsInLogin['password']) ? $errorsInLogin['password'] : null; ?>
							</div>
							<br>
						<input type="hidden" name="tipo" value="login">
						<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="rememberUser">
									Recordarme
								</label>
							</div>
					</fieldset>

					<input type="hidden" name="tipo" value="login">
						<button class="btn-secondary" type="submit" name="button">Iniciar sesión</button>
						</form>
				</div>
				<br>
				<a href=# >¿Olvidaste tu contraseña?</a>
				<br>
				<br>
				<a href="index.php">¿No tenés cuenta?</a>
				<img class="form-shadow" src="images/bottom-shadow.png" alt="" />
			</div><!-- Formulario -->

		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<?php require_once "partials/footer.php";  ?>

</body>
</div>

</html>
