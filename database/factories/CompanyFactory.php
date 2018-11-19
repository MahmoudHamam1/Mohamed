<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name'              => $faker->name('male'),
        'description'       => $faker->text(200),
        'phone_number'      => $faker->phoneNumber ,
        'employee_name'     => $faker->name('male'),
        'employee_number'   => $faker->phoneNumber,
        'image'             => $faker->imageUrl(500,400),
        'email'             => $faker->unique()->safeEmail,
        'address'           => $faker->text(200), // secret
        'created_at'        => Carbon::now(),
        'updated_at'        => Carbon::now()
    ];
});
