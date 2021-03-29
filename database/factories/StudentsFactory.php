<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Borrows;
use App\Books;
use App\Students;
use Faker\Generator as Faker;

$factory->define(Students::class, function (Faker $faker) {
    return [
        'lname' => $faker->lastname,
        'fname' => $faker->firstname,
        'phone' => $faker->phoneNumber,
        'gender' => $faker->randomElement($array = array ('male', 'female')) ,
        'course' => $faker->word,
        'year' => $faker->numberBetween(1, 4),
    ];
});
