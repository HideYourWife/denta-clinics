<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use \App\Models\{Review, Clinic};

$factory->define(Review::class, function (Faker $faker) {
    $name = $faker->name();
    $email = $faker->email;
    $r_preview_text = $faker->numberBetween($min = 150, $max = 350);
    $text = $faker->realText($maxNbChars = $r_preview_text, $indexSize = 2);
    $rating = $faker->numberBetween(1, 5);

    $created_at = $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now');;

    $clinic_Id = Clinic::all()->random()->id;

    $data = [
        'name' => $name,
        'email' => $email,
        'text' => $text,
        'rating' => $rating,
        'active' => 1,
        'created_at' => $created_at,
        'updated_at' => $created_at,
        'clinic_id' => $clinic_Id
    ];

    return $data;
});
