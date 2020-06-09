<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->text($maxNbChars = 50),
        'user_id' => $faker->numberBetween(1,5),
        'film_id' => $faker->numberBetween(1,6),
    ];
});
