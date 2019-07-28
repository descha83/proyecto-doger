<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
      protected $fillable = ['contenido', 'imagen', 'user_id'];

	public function users()
	{
		return $this->belongsTo(User::class);
	}
}
