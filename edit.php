<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';

	// require_once 'partials/head.php';
	$countries = [
		'ar' => 'Argentina',
		'bo' => 'Bolivia',
		'br' => 'Brasil',
		'co' => 'Colombia',
		'cl' => 'Chile',
		'ec' => 'Ecuador',
		'pa' => 'Paraguay',
		'pe' => 'Perú',
		'uy' => 'Uruguay',
		've' => 'Venezuela',
	];
	// Creamos esta variable con Array vacío para que no de error al entrar por GET
	$errorsInEdit = [];
	// Variables para persitir

	if ($_POST) {
		if ($_POST['tipo'] == "register") {
			// code...

		// Las variables de persistencia les asigno el valor que vino de $_POST
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$userName = trim($_POST["userName"]);
		$countryEdit = $_POST['country'];
		// La función registerValidate() nos retorna el array de errores que almacenamos en esta variable
		$errorsInEdit = editValidate();
		// Si no hay errores en el registro
		// Cuando no hay errores guardo la imagen y los datos
		//if ( count($errorsInRegister) == 0 ) {
		if ( !$errorsInEdit ) {
			// Guardo la imagen y obtengo el nombre aleatorio creado
			$imgName = saveImage();
			// Creo en $_POST una posición "avatar" para guardar el nombre de la imagen
			$_POST['avatar'] = $imgName;
			// Guardo al usuario en el archivo JSON, y me devuelve al usuario que guardó en array
			$theUser = editUser();
		
			// Logueo al usuario
			login($theUser);
		}
	}
	}
	// require_once 'partials/navbar.php';
?>




	<!-- //Register-Form -->

<!-- ?php require_once 'partials/footer.php'; ?> -->
