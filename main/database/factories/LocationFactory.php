<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'name' => $faker -> company,
        'address' => $faker -> address,
        'num_of_employees' => $faker -> numberBetween(15,1500)
    ];
});
