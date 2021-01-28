<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName,
        'lastname' => $faker -> lastName,
        'date_of_hiring' => $faker -> dateTime($max = 'now', $timezone = null)
    ];
});
