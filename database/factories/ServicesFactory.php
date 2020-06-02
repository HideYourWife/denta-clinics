<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use \App\Models\{Service, ServiceCategory};

$factory->define(Service::class, function (Faker $faker) {

    $rChars = $faker->numberBetween($min = 10, $max = 25);
    $title = $faker->unique()->realText($maxNbChars = $rChars, $indexSize = 2);
    $created_at = $faker->dateTime();
    $rId = ServiceCategory::all()->random()->id;

    $data = [
        'name' => $title,
        'created_at' => $created_at,
        'updated_at' => $created_at,
        'service_category_id' => $rId
    ];
    return $data;
});
