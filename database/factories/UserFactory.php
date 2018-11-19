<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name'     => $faker->firstName('male'),
        'last_name'      => $faker->lastName,
        'birth_date'     => $faker->dateTimeThisCentury->format('Y-m-d'),
        'user_type'      => $faker->randomElement(['guest', 'member', 'admin']),
        'phone_number'   => $faker->phoneNumber,
        'nationality'    => 'Saudi Arabia',
        'communication'  => $faker->randomElement(['facebook', 'twitter', 'google']),
        'image'          => $faker->imageUrl(500,400),
        'email'          => $faker->unique()->safeEmail,
        'password'       => bcrypt('123456'),
        'remember_token' => str_random(10),
        'created_at'     => Carbon::now(),
        'updated_at'     => Carbon::now()
    ];
});
