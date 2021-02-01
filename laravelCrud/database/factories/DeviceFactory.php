<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {

    return [
      'name' => $faker -> word,
      'model'=> $faker -> md5,
      'price'=> rand(5, 5000),
      'consumption' => rand(1, 8) * 1000,
    ];
});
