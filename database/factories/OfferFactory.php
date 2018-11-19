<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Offer::class, function (Faker $faker) {
    return [
        'title'    => $faker->sentence(1),
        'description'    => $faker->sentence(3),
        'start_date'     => $faker->dateTimeThisCentury->format('Y-m-d'),
        'expired_date'   => $faker->dateTimeThisCentury->format('Y-m-d'),
        'image'          => $faker->imageUrl($width = 500, $height = 400),
        'created_at'     => Carbon::now(),
        'updated_at'     => Carbon::now()
    ];
});
