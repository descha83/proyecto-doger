<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Post::class, function (Faker $faker) {
$filePath = storage_path('app/public/img_posts');

    return [
        'contenido' => $faker->text($maxNbChars = 500),
        'imagen' => $faker->image($filePath, 800, 800, null, false),
        //'user_id'=> $faker->randomDigitNotNull(),
    ];
});
