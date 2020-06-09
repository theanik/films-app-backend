<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Film;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Film::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => Str::slug($faker->colorName),
        'description' => $faker->text($maxNbChars = 450),
        'release_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'ticket_price' => $faker->numberBetween(100,200),
        'country' => $faker->country,
        'genre' => $faker->colorName,
        'photo' => $faker->image('public/film_photos/',$width = 400, $height = 300)
    ];
});
