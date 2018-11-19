<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Card::class, function (Faker $faker) {
    return [
        'name'          => $faker->text(200),
        'title'         => $faker->text(200),
        'description'   => $faker->text(200),
        'barcode'       => $faker->ean13,
        'quantity'      => $faker->numberBetween(100, 10000),
        'price'         => $faker->numberBetween(10000, 100000),
        'image'         => $faker->imageUrl(500, 400),
        'created_at'    => Carbon::now(),
        'updated_at'    => Carbon::now()
    ];
});
