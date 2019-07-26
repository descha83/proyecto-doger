<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $users = factory(App\User::class)->times(5)->create();
			$posts = factory(App\Post::class)->times(10)->create();

      factory(App\User::class, 20)->create();

              foreach(App\User::all() as $users) {

                  foreach(App\Post::all() as $posts) {

                      if (rand(1, 100) > 100) {
                              $users->posts()->save($posts->id);
                      }
                  }
                  $users->save();
              }
          }
    }
