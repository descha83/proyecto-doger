@extends('template')

@section('pageTitle', '| Ponete al día con la comunidad')

@section('mainContent')

@include('includes.navbar')

  <div id="page-contents">
      	<div class="container">
      		<div class="row">

            <!-- Newsfeed Common Side Bar Left
            ================================================= -->
      			<div class="col-md-3 static">
              <div class="profile-card">
              	<img src="/storage/avatars/{{ Auth::user()->avatar }}" alt="imagen usuario" class="profile-photo" />
              	<h5 style='color:#FFFFFF'>¡HOLA!</h5>
              	<a href="#" class="text-white">{{ Auth::user()->name }}</a>
              </div><!--profile card ends-->
              <ul class="nav-news-feed">
                <li><i class="icon ion-ios-paper"></i><div><a href="profile.php">Mi Perfil</a></div></li>
                <li><i class="icon ion-ios-people-outline"></i><div><a href="en-construccion.php">Amigos</a></div></li>
                <li><i class="icon ion-chatboxes"></i><div><a href="en-construccion.php">Mensajes</a></div></li>
                <li><i class="icon ion-images"></i><div><a href="en-construccion.php">Imágenes</a></div></li>
                <li><i class="icon ion-ios-videocam"></i><div><a href="en-construccion.php">Videos</a></div></li>
              </ul><!--news-feed links ends-->
              <div id="chat-block">
                <div class="title">Chat online</div>
                <ul class="online-users list-inline">
                  <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="images/users/user-2.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                  <li><a href="newsfeed-messages.html" title="Sophia Lee"><img src="images/users/user-3.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                  <li><a href="newsfeed-messages.html" title="John Doe"><img src="images/users/user-4.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                  <li><a href="newsfeed-messages.html" title="Alexis Clark"><img src="images/users/user-5.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                  <li><a href="newsfeed-messages.html" title="James Carter"><img src="images/users/user-6.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                  <li><a href="newsfeed-messages.html" title="Robert Cook"><img src="images/users/user-7.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                  <li><a href="newsfeed-messages.html" title="Richard Bell"><img src="images/users/user-8.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                  <li><a href="newsfeed-messages.html" title="Anna Young"><img src="images/users/user-9.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                  <li><a href="newsfeed-messages.html" title="Julia Cox"><img src="images/users/user-10.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                </ul>
              </div><!--chat block ends-->
            </div>
      			<div class="col-md-7">

  						<div class="create-post">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <textarea name="texts" id="exampleTextarea" cols="300" rows="2" class="form-control" placeholder="¿Qué estás pensando?"></textarea>
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
                  </div>
                </div>
              </div><!-- Crear post fin-->

              <!-- Post Content
              ================================================= -->
              <div class="post-content">
                <img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" />
                <div class="post-container">
                  <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link">Alexis Clark</a> <span class="following">siguiendo</span></h5>
                      <p class="text-muted">Publicó una foto hace 3 min</p>
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
                      <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
  									<div class="post-comment">
  								 	 <img src="data/avatars/" alt="imagen usuario" class="profile-photo-sm" />
  								 	 <input type="text" class="form-control" placeholder="Escribí tu comentario">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Post Content
              ================================================= -->
              <div class="post-content">
                 <video class="post-video" controls> <source src="videos/8.mp4" type="video/mp4"> </video>
                <div class="post-container">
                  <img src="images/users/user-3.jpg" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link">Sophia Lee</a> <span class="following">following</span></h5>
                      <p class="text-muted">Updated her status about 33 mins ago</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 75</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 8</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="line-divider"></div>
                     <div class="post-comment">
                      <img src="images/users/user-14.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Olivia </a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <i class="em em-anguished"></i> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Sarah</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Linda</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Post Content
              ================================================= -->
              <div class="post-content">
                <div class="post-container">
                  <img src="images/users/user-2.jpg" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link">Linda Lohan</a> <span class="following">following</span></h5>
                      <p class="text-muted">Published a photo about 1 hour ago</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 23</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 4</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p><i class="em em-thumbsup"></i> <i class="em em-thumbsup"></i> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="images/users/user-12.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Cris </a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <i class="em em-muscle"></i></p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Post Content
              ================================================= -->
              <div class="post-content">
                <img src="images/post-images/2.jpg" alt="post-image" class="img-responsive post-image" />
                <div class="post-container">
                  <img src="images/users/user-4.jpg" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link">John Doe</a> <span class="following">following</span></h5>
                      <p class="text-muted">Published a photo about 2 hour ago</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 39</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 2</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="images/users/user-13.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Brian </a>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Richard</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Post Content
              ================================================= -->
              <div class="post-content">
                <div class="google-maps">
                  <div id="map" class="map"></div>
                </div>
                <div class="post-container">
                  <img src="images/users/user-3.jpg" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link">Sophia Lee</a> <span class="following">following</span></h5>
                      <p class="text-muted"><i class="icon ion-ios-location"></i> Went to Niagara Falls today</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 17</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Sarah </a>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. <i class="em em-blush"></i> <i class="em em-blush"></i> </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Post Content
              ================================================= -->
              <div class="post-content">
                <img src="images/post-images/11.jpg" alt="" class="img-responsive post-image" />
                <div class="post-container">
                  <img src="images/users/user-9.jpg" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link">Anna Young</a> <span class="following">following</span></h5>
                      <p class="text-muted">Published a photo about 4 hour ago</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 2</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Julia </a>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Newsfeed Common Side Bar Right
            ================================================= -->
      			<div class="col-md-2 static">
              <div class="suggestions" id="sticky-sidebar">
                <h4 class="grey">Who to Follow</h4>
                <div class="follow-user">
                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm pull-left" />
                  <div>
                    <h5><a href="timeline.html">Diana Amber</a></h5>
                    <a href="#" class="text-green">Add friend</a>
                  </div>
                </div>
                <div class="follow-user">
                  <img src="images/users/user-12.jpg" alt="" class="profile-photo-sm pull-left" />
                  <div>
                    <h5><a href="timeline.html">Cris Haris</a></h5>
                    <a href="#" class="text-green">Add friend</a>
                  </div>
                </div>
                <div class="follow-user">
                  <img src="images/users/user-13.jpg" alt="" class="profile-photo-sm pull-left" />
                  <div>
                    <h5><a href="timeline.html">Brian Walton</a></h5>
                    <a href="#" class="text-green">Add friend</a>
                  </div>
                </div>
                <div class="follow-user">
                  <img src="images/users/user-14.jpg" alt="" class="profile-photo-sm pull-left" />
                  <div>
                    <h5><a href="timeline.html">Olivia Steward</a></h5>
                    <a href="#" class="text-green">Add friend</a>
                  </div>
                </div>
                <div class="follow-user">
                  <img src="images/users/user-15.jpg" alt="" class="profile-photo-sm pull-left" />
                  <div>
                    <h5><a href="timeline.html">Sophia Page</a></h5>
                    <a href="#" class="text-green">Add friend</a>
                  </div>
                </div>
              </div>
            </div>
      		</div>
      	</div>
      </div>
@include('includes.footer')

@endsection


                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
