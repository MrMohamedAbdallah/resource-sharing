<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Resource::class, function (Faker $faker) {
    return [
        "name" => implode(" ", $faker->words(2)),
        "url"  => $faker->url()
    ];
});
