<?php
require_once "register-login-controller.php";
require_once "partials/head.php";


 	$userToLogin = getUserByEmail($_SESSION['userLoged']["email"]);
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

$name = $userToLogin["name"];
$userName = $userToLogin["userName"];
$email = $userToLogin["email"];
$avatar = $userToLogin["avatar"];
$countryEdit = $userToLogin["country"];
require_once "partials/header-profile.php"; 
 ?>

 <h2 class="form-registro">Editar mi perfil</h2>
  <form class="registro" action="edit-user.php" method="post" enctype="multipart/form-data">
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
           <?= $code == $countryEdit ? 'selected' : null; ?>>

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
  <button class="btn btn-warning btn-xl bt-registro" type="submit" >Guardar cambios</button>
</form>
<?php
require_once "partials/footer.php";
 ?>
