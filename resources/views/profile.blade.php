@include('partials/head')
@include('partials/navbar')

<body>
 <div class="container">

   <div class="timeline">
     <div class="timeline-cover">

       <!--Pantallas grandes-->
       <div class="timeline-nav-bar hidden-sm hidden-xs">
         <div class="row">
           <div class="col-md-3">
             <div class="profile-info">
               <img src="data/avatars/" alt="imagen usuario" class="img-responsive profile-photo" />
             </div>
           </div>
           <div class="col-md-3">
             <ul class="list-inline">
               <li><h3></h3>
               <p class="text-muted"></p></li>
             </ul>
           </div>
           <div class="col-md-6">
             <ul class="list-inline profile-menu">
               <li><a href="en-construccion.php">Biografía</a></li>
               <li><a href="en-construccion.php">Información</a></li>
               <li><a href="en-construccion.php">Fotos</a></li>
               <li><a href="en-construccion.php">Amigos</a></li>
							 <li><a href="edit-user.php">Editar perfil</a></li>

             </ul>
           </div>
         </div>
       </div><!--Pantallas grandes-->

       <!--Pantallas chicas-->
       <div class="navbar-mobile hidden-lg hidden-md">
         <div class="profile-info">
           <img src="data/avatars/" alt="imagen usuario" class="img-responsive profile-photo" />
           <h4></h4>
           <p class="text-muted"></p>
         </div>
         <div class="mobile-menu">
           <ul class="list-inline">
             <li><a href="timline.html" class="active">Biografía</a></li>
             <li><a href="timeline-about.html">Información</a></li>
             <li><a href="timeline-album.html">Fotos</a></li>
             <li><a href="timeline-friends.html">Amigos</a></li>
           </ul>
         </div>
       </div><!--Pantallas chicas-->

     </div>
     <div id="page-contents">
       <div class="row">
         <div class="col-md-12">

           <!-- Crear post
           ================================================= -->
           <div class="create-post">
             <div class="row">
               <div class="col-md-12 col-sm-12">
                 <form class="" action="{{route('Post.store')}}" method="post" enctype="multipart/form-data">
                   @csrf

                 <div class="form-group">
                   <textarea name="contenido" id="exampleTextarea" cols="300" rows="2" class="form-control" placeholder="¿Qué estás pensando?"></textarea>
                 </div>
               </div>
               <div class="col-md-12 col-sm-12">
                 <div class="tools">
                   <ul class="publishing-tools list-inline">
                     <li><a href="#"><i class="ion-compose"></i></a></li>
                     <li><a href="#"><i class="ion-images"></i></a></li>
                     <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                     <li><a href="#"><i class="ion-map"></i></a></li>
                   </ul>
                   <button class="btn btn-primary pull-right">Publicar</button>
                 </div>
                 </form>
               </div>
             </div>
           </div><!-- Crear post fin-->

      </div>
       <div class="row">
         <div class="col-md-3">
         </div>
         <div class="col-md-7">

           <!-- Post Content
           ================================================= -->
           <div class="post-content">

             <!--Fecha Post-->
             <div class="post-date hidden-xs hidden-sm">
               <h5></h5>
               <p class="text-grey">Hace un momento</p>
             </div><!--Post Fin-->

               <iframe width="100%" height="315" src="https://www.youtube.com/embed/CvixRV5DfXk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             <div class="post-container">
               <img src="images/users/user-1.jpg" alt="user" class="profile-photo-md pull-left" />
               <div class="post-detail">
                 <div class="user-info">
                   <h5><a href="timeline.html" class="profile-link">Lorena Astudillo</a> <span class="following">siguiendo</span></h5>
                   <p class="text-muted">Publicó hace 15 minutos</p>
                 </div>
                 <div class="reaction">
                   <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                   <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                 </div>
                 <div class="line-divider"></div>
                 <div class="post-text">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                 </div>
                 <div class="line-divider"></div>
                 <div class="post-comment">
                   <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                   <p><a href="#" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                 </div>
                 <div class="post-comment">
                   <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                   <p><a href="#" class="profile-link">Juan</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                 </div>
                 <div class="post-comment">
                   <img src="data/avatars/" alt="imagen usuario" class="profile-photo-sm" />
                   <input type="text" class="form-control" placeholder="Escribí tu comentario">
                 </div>
               </div>
             </div>
           </div>

           <!-- COntenido Post
           ================================================= -->
           <div class="post-content">

             <!--Fecha post-->
             <div class="post-date hidden-xs hidden-sm">
               <h5></h5>
               <p class="text-grey">10/22/2016</p>
             </div><!--Fin fecha post-->

             <img src="images/post-images/dogers1.png" alt="post-image" class="img-responsive post-image" />
             <div class="post-container">
               <img src="images/users/user-1.jpg" alt="user" class="profile-photo-md pull-left" />
               <div class="post-detail">
                 <div class="user-info">
                   <h5><a href="timeline.html" class="profile-link">Sarah Cruz</a> <span class="following">Siguiendo</span></h5>
                   <p class="text-muted">Ayer</p>
                 </div>
                 <div class="reaction">
                   <a class="btn text-green"><i class="icon ion-thumbsup"></i> 49</a>
                   <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                 </div>
                 <div class="line-divider"></div>
                 <div class="post-text">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                 </div>
                 <div class="line-divider"></div>
                 <div class="post-comment">
                   <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                   <p><a href="#" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                 </div>
                 <div class="post-comment">
                   <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                   <p><a href="#" class="profile-link">Juan</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                 </div>
                 <div class="post-comment">
                    <img src="data/avatars/" alt="imagen usuario" class="profile-photo-sm" />
                   <input type="text" class="form-control" placeholder="Escribí tu comentario">
                 </div>
               </div>
             </div>
           </div>

           <!-- Contenido post
           ================================================= -->
           <div class="post-content">

             <!--Fecha post-->
             <div class="post-date hidden-xs hidden-sm">
               <h5></h5>
               <p class="text-grey">10/21/2016</p>
             </div><!--Fecha post fin-->

             <div class="post-container">
               <img src="images/users/user-1.jpg" alt="user" class="profile-photo-md pull-left" />
               <div class="post-detail">
                 <div class="user-info">
                   <h5><a href="timeline.html" class="profile-link">Sarah Cruiz</a> <span class="following">Siguiendo</span></h5>
                   <p class="text-muted">Hace 2 días</p>
                 </div>
                 <div class="reaction">
                   <a class="btn text-green"><i class="icon ion-thumbsup"></i> 49</a>
                   <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                 </div>
                 <div class="line-divider"></div>
                 <div class="post-text">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                 </div>
                 <div class="line-divider"></div>
                 <div class="post-comment">
                   <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                   <p><a href="#" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                 </div>
                 <div class="post-comment">
                   <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                   <p><a href="#" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                 </div>
                 <div class="post-comment">
                   <img src="data/avatars/" alt="imagen usuario" class="profile-photo-sm" />
                   <input type="text" class="form-control" placeholder="Escribí tu comentario">
                 </div>
               </div>
             </div>
           </div>

         </div>
         <div class="col-md-2 static">
           <div id="sticky-sidebar">
             <h4 class="grey">Tu actividad</h4>
             <div class="feed-item">
               <div class="live-activity">
                 <p><a href="#" class="profile-link"></a> Comentaste una foto</p>
                 <p class="text-muted">Hace 5 minutos</p>
               </div>
             </div>
             <div class="feed-item">
               <div class="live-activity">
                 <p><a href="#" class="profile-link"></a> Publicaste una foto</p>
                 <p class="text-muted">Hace una hora</p>
               </div>
             </div>
             <div class="feed-item">
               <div class="live-activity">
                 <p><a href="#" class="profile-link"></a>Te gustó una publicación</p>
                 <p class="text-muted">Hace 4 horas</p>
               </div>
             </div>
             <div class="feed-item">
               <div class="live-activity">
                 <p><a href="#" class="profile-link"></a> Compartiste un álbum</p>
                 <p class="text-muted">Hace un día</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 @include('partials/footer')
