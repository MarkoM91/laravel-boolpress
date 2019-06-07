<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
      'title' => $faker->word(3),
      'content' => $faker->sentence(20),
      'likes' => $faker -> numberBetween(0, 1000)
    ];
});
