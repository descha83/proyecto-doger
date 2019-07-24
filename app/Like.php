<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  protected $fillable = [
      'id_user_like', 'id_posteo'
  ];
}
