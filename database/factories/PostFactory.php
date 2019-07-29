<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    $slug = Str::slug($title);
    return [
        'user_id'   => App\User::all()->random()->id,
        'title'     => $title,
        'slug'      => $slug,
        'content'   => $faker->paragraphs(rand(2, 10), true),
        'status'    => 1
    ];
});
