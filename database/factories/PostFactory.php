<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(5);
    return [
        'title' =>$title,
        'slug'  => Str::slug($title),
        'content' =>$faker->sentence(100)
    ];
});