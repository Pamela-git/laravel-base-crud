<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {

    // $currency = '€';
    // $electricity = 'W';
    return [
      'name' => $faker -> word,
      'model'=> $faker -> md5,
      'price'=> rand(5, 5000),
      'consumption' => rand(200, 3000),
    ];
});
