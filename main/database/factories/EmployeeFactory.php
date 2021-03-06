<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName,
        'lastname' => $faker -> lastName,
        'date_of_hiring' => $faker -> date($format = 'Y-m-d', $max = 'now')
    ];
});
