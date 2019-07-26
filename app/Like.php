<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  protected $fillable = [
      'user_id', 'post_id'
  ];

  public function users()
	{
		return $this->belongsTo(User::class);
	}
  public function posts()
  {
    return $this->belongsTo(Post::class);
  }

}
