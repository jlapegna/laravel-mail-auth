<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Reservation;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'guestname' => $faker -> name,
        'date' => $faker -> year,
        'guestcount' => $faker -> numberBetween($min = 1, $max = 10)
    ];
});
