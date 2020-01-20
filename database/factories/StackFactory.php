<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Stack::class, function (Faker $faker) {
    return [
        "description" => rand() % 2 == 0 ? $faker->paragraph() : null,
    ];
});
