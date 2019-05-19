<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';
	// Si está logueda la persona la redirijo al profile
	if ( isLogged() ) {
		header('location: Profile.php');
		exit;
	}
	// Generamos nuestro array de errores interno
	$errorsInLogin = [];
	// Persistimos el email
	$email = '';
	if ($_POST) {
		if ($_POST["tipo"]=="login") {
			// code...

		// Persistimos el email con lo vino por $_POST
		$email = trim($_POST['email']);
		// La función loginValidate() nos retorna el array de errores que almacenamos en esta variable
		$errorsInLogin = loginValidate();
		if ( !$errorsInLogin ) {
			// Traemos al usuario que vamos a loguear
			$userToLogin = getUserByEmail($email);
			// Preguntamos si quiere ser recordado
			if ( isset($_POST['rememberUser']) ) {
				setcookie('userLoged', $email, time() + 3000);
			}
			// Logeamos al usuario
			login($userToLogin);
		}
	}
	}
	$pageTitle = 'Login';
	require_once 'index.php';
?>

<!-- <php require_once 'partials/navbar.php'; ?>
