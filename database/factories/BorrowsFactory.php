<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Borrows;
use App\Students;
use App\Books;
use Faker\Generator as Faker;

$factory->define(Borrows::class, function (Faker $faker) {
    $student = Students::all()->pluck('id')->toArray();
    $book = Books::all()->pluck('id')->toArray();

    return [
        'students_id' => $faker->randomElement($student),
        'books_id' => $faker->randomElement($book),
        'date_borrowed' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'date_returned' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
