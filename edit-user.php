<?php
$pageTitle = "Editar usuario";
require_once "edit.php";
require_once "partials/head.php";
require_once 'conexion.php';

// uso la funcion getUserByEmail con el email del usuario logueado en sesion
 	$userToEdit = getUserByEmail($_SESSION['userLoged']["email"]);
// siempre que la informacion no venga por post y guardo los valores que vienen en las siguentes variables
if (!$_POST) {
  $name = $userToEdit["name"];
  $userName = $userToEdit["userName"];
  $email = $userToEdit["email"];
  $avatar = $userToEdit["avatar"];
  $countryEdit = $userToEdit["country"];

}
require_once "partials/navbar.php";
 ?>
<!-- desarrollo el mismo form que use para registro con la variable de errores  -->
<div class="container">

 <div class="timeline-nav-bar hidden-sm hidden-xs">

 <h2 class="form-registro">Editar mi perfil</h2>
  <form class="registro" action="edit-user.php" method="post" enctype="multipart/form-data">
    <p class="registro-espacio">
      <br>
      <br>
      <br>
     <label for="name"></label>
     <input
       type="text"
       name="name"
       placeholder="Nombre Completo"
       class="form-control <?= isset($errorsInEdit['name']) ? 'is-invalid' : null ?>"
       value="<?= $name; ?>"
       required
     >
     <div class="invalid-feedback">
       <?= isset($errorsInEdit['name']) ? $errorsInEdit['name'] : null; ?>
     </div>
    </p>
    <p class="registro-espacio">
     <label for="user"></label>

     <input
       type="text"
       name="userName"
       placeholder="Nombre Usuario"
       class="form-control <?= isset($errorsInEdit['userName']) ? 'is-invalid' : null ?>"
       value="<?= $userName; ?>"
       required
     >
     <div class="invalid-feedback">
       <?= isset($errorsInEdit['userName']) ? $errorsInEdit['userName'] : null; ?>
     </div>
    </p>
    <p class="registro-espacio">
     <label for="email"></label>
     <input
       type="text"
       name="email"
       placeholder="Email"
       class="form-control <?= isset($errorsInEdit['email']) ? 'is-invalid' : null ?>"
       value="<?= $email; ?>"
       required
     >
     <div class="invalid-feedback">
       <?= isset($errorsInEdit['email']) ? $errorsInEdit['email'] : null; ?>
     </div>
    </p>
    <p class="registro-espacio">
     <label for="avatar"></label>
     <input
       type="file"
       name="avatar"
       class="form-control <?= isset($errorsInEdit['avatar']) ? 'is-invalid' : null; ?>"
       required
     >
     <label class=""></label>
     <div class="invalid-feedback">
       <?= isset($errorsInEdit['avatar']) ? $errorsInEdit['avatar'] : null; ?>
     </div>

    </p>

      <div class="form-group">
     <label><b>País de nacimiento:</b></label>
     <select
       name="country"
       class="form-control <?= isset($errorsInEdit['country']) ? 'is-invalid' : null; ?>"
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
       <?= isset($errorsInEdit['country']) ? $errorsInEdit['country'] : null; ?>
     </div>
   </div>
 </p>

  <button class="btn btn-warning btn-xl bt-registro" type="submit" >Guardar cambios</button>
</form>
</div>
</div>
<?php
require_once "partials/footer.php";


 ?>
