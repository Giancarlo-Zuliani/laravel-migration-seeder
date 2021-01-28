<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'name' => $faker -> company,
        'logo' => $faker -> url,
        'phone_number' => $faker -> phoneNumber,
        'num_of_location' => $faker -> numberBetween(1,50)
    ];
});
