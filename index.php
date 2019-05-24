

<?php
	$pageTitle = '¡Bienvenido!';
	require_once 'register-login-controller.php';
	require_once 'register.php';
	require_once 'partials/head.php';
	if (!isset($emailUserName)) {
	  $emailUserName = "";
	}
?>
  <body>
    <section id="banner">
			<div class="container">

        <!-- Formulario
        ================================================= -->
        <div class="sign-up-form">
					<a href="index.html" class="logo"><img src="images/logo.png" alt="Dogers"/></a>
					<h2 class="text-white" style="font-size:2em">¡Sé parte de la comunidad de mascotas más grande!</h2>
					<div class="line-divider"></div>
					<div class="form-wrapper">
						<p class="signup-text">Registrate y conectate con Dogers de todo el mundo </p>
						<form class="registro" action="index.php" method="post" enctype="multipart/form-data">
							<fieldset class="form-group">
								<label>Nombre completo:</label>
								<input type="text" name="name" class="form-control <?= isset($errorsInRegister['name']) ? 'is-invalid' : null ?>" placeholder="Nombre" value="<?= $name; ?>" required>
									<div class="invalid-feedback">
									<?= isset($errorsInRegister['name']) ? $errorsInRegister['name'] : null; ?>
								</div>
							</fieldset>
              <fieldset class="form-group">
								<label>Nombre de usuario:</label>
                <input type="text" name='userName' class="form-control <?= isset($errorsInRegister['userName']) ? 'is-invalid' : null ?>" legend="Nombre de usuario" placeholder="Usuario" value="<?= $userName; ?>" required>
									<div class="invalid-feedback">
									<?= isset($errorsInRegister['userName']) ? $errorsInRegister['userName'] : null; ?>
								</div>
							</fieldset>
              <fieldset class="form-group">
								<label for="avatar" >Cargar avatar:</label>
                <input type="file" name="avatar" class="form-control-file <?= isset($errorsInRegister['avatar']) ? 'is-invalid' : null; ?>" required>
									<div class="invalid-feedback">
									<?= isset($errorsInRegister['avatar']) ? $errorsInRegister['avatar'] : null; ?>
								</div>
							</fieldset>
              <fieldset>
                <label for="exampleFormControlSelect1">País de nacimiento:</label>
                <select name="country" class="form-control form-extras <?= isset($errorsInRegister['country']) ? 'is-invalid' : null; ?>"
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
              </fieldset>

						  <fieldset class="form-group">
								<label>E-mail:</label>
								<input type="email" name="email" class="form-control <?= isset($errorsInRegister['email']) ? 'is-invalid' : null ?>" placeholder="Email" class="form-control <?= isset($errorsInLogin['emailUserName']) ? 'is-invalid' : null ?>" value="<?= $email; ?>" required>
								<div class="invalid-feedback">
									<?= isset($errorsInRegister['email']) ? $errorsInRegister['email'] : null; ?>
								</div>
							</fieldset>
              <fieldset class="form-group">
								<label>Contraseña:</label>
                <input type="password" name="password" class="form-control <?= isset($errorsInRegister['password']) ? 'is-invalid' : null ?>" placeholder="Contraseña" name="password" required>
								<small id="passwordHelpInline" class="text-muted" style="color:#FFFFFF">
	 								Debe tener más de 5 caracteres, las letras DH.
 								</small>
									<div class="invalid-feedback">
									<?= isset($errorsInRegister['password']) ? $errorsInRegister['password'] : null; ?>
								</div>
							</fieldset>
              <fieldset class="form-group">
								<label>Repetir contraseña:</label>
                <input type="password" name="rePassword" class="form-control form-control <?= isset($errorsInRegister['rePassword']) ? 'is-invalid' : null; ?>" placeholder="Repetir contraseña" required>
									<div class="invalid-feedback">
									<?= isset($errorsInRegister['rePassword']) ? $errorsInRegister['rePassword'] : null; ?>
								</div>
							</fieldset>

						<p>Al registrarte, aceptás los términos y condiciones</p>
						<input type="hidden" name="tipo" value="register">
						<button class="btn-secondary" type="submit">Registrarme</button>
						</form>
					</div>
					<a href="login.php">¿Ya tenés una cuenta?</a>
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

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>


		<?php require_once "partials/footer.php";  ?>

	</body>
  </div>

</html>
