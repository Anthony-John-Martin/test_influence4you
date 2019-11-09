<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Influencer;
use Faker\Generator as Faker;

$factory->define(Influencer::class, function (Faker $faker) {
	$gender = $faker->boolean;
    return [
	    'first_name' => $faker->firstName($gender?'female':'male'),
	    'last_name' => $faker->lastName,
	    'gender' => $gender,
	    'birthday' => $faker->dateTimeBetween($startDate = '-50 years', $endDate = '-18 years'),
	    'email' => $faker->unique()->safeEmail,
    ];
});
