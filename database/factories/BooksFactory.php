<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Borrows;
use App\Students;
use App\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [
        'title'  => $faker->sentence,
        'author' => $faker->name,
        'genre'  => $faker->word,
        'date_published' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'publisher' => $faker->name,
    ];
});
