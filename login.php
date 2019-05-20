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
	$pageTitle = 'Login';
	require_once 'index.php';
?>

<!-- <php require_once 'partials/navbar.php'; ?>
