<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'name' => $faker->unique()->word(3),
      'description' => $faker->sentence(10)
    ];
});
