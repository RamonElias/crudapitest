<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Test::class, function (Faker $faker) {
   return [
      'ab1' => $faker->sentence(6, true),
      'ab2' => $faker->sentence(6, true),
      'ab3' => $faker->sentence(6, true),
      'ab4' => $faker->sentence(6, true),
      'ab5' => $faker->sentence(6, true),
   ];
});
