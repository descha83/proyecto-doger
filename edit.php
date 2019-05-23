<?php

	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';

	// cargo el array de paises para que me aparezca en el combo de edicion;
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
	// copiamos el register y cambiamos lo que corresponde
	// Creamos esta variable con Array vacío para que no de error al entrar por GET
	$errorsInEdit = [];

// si venimos por post toma los valores de las variables y las trimea
	if ($_POST) {
		{
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
			// piso al usuario en el archivo JSON, y me devuelve al usuario editado
			$theUser = editUser();

			// graba $theUser en la sesion y lo envia a profile
			login($theUser);
		}
	}
	}
	// require_once 'partials/navbar.php';
?>




	<!-- //Register-Form -->

<!-- ?php require_once 'partials/footer.php'; ?> -->
