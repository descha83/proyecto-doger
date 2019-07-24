@include('partials/head')
@include('partials/navbar')

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
       class="form-control "
       value=""
       required
     >
     <div class="invalid-feedback">

     </div>
    </p>
    <p class="registro-espacio">
     <label for="user"></label>

     <input
       type="text"
       name="userName"
       placeholder="Nombre Usuario"
       class="form-control "
       value=""
       required
     >
     <div class="invalid-feedback">

     </div>
    </p>
    <p class="registro-espacio">
     <label for="email"></label>
     <input
       type="text"
       name="email"
       placeholder="Email"
       class="form-control"
       value=""
       required
     >
     <div class="invalid-feedback">

     </div>
    </p>
    <p class="registro-espacio">
     <label for="avatar"></label>
     <input
       type="file"
       name="avatar"
       class="form-control"
       required
     >
     <label class=""></label>
     <div class="invalid-feedback">

     </div>

    </p>

      <div class="form-group">
     <label><b>País de nacimiento:</b></label>
     <select
       name="country"
       class="form-control "
     >
       <option value="">Elegí un país</option>

     </select>

     <div class="invalid-feedback">

     </div>
   </div>
 </p>

  <button class="btn btn-warning btn-xl bt-registro" type="submit" >Guardar cambios</button>
</form>
</div>
</div>
 @include('partials/footer')
