@php

foreach ($user->menu as $menu) {
  //obteniendo los datos de un menu específico
  echo $user->name;
  echo $post->contenido;
  //obteniendo datos de la tabla pivot por menu
  echo $post->pivot->user_id;
  echo $user->pivot->post_id;
}
@endphp
