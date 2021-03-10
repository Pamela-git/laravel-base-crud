<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {

    return [
      'name' => $faker -> word,
      'model'=> $faker -> unique -> md5, //lo unique evita che il faker generi due valori uguali
      'price'=> rand(5, 5000),
      'consumption' => rand(1, 8) * 1000,
    ];
});
