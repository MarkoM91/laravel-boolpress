<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker ->lastname,
        'username' => $faker->unique()->username
    ];
});
