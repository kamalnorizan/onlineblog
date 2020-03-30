<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($faker->numberBetween(4,8)),
        'publish_at' => now(),
        'body' => $faker->paragraph($faker->numberBetween(5,10)),
        'user_id' => $faker->numberBetween(1,50),
    ];
});
