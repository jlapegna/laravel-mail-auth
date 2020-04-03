<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
Use App\Room;

$factory->define(Room::class, function (Faker $faker) {
    return [

      'roomnumber' => $faker -> numberBetween($min = 1, $max = 30),
      'floor' => $faker -> numberBetween($min = 1, $max = 10),
      'beds' => $faker -> numberBetween($min = 1, $max = 3)
    ];
});
