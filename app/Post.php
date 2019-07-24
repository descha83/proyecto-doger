<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
      'contenido', 'imagen', 'id_user_emisor','id_user_receptor'
  ];
}
