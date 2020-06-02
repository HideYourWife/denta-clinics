<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use \App\Models\{ClinicPhoto, Clinic};

$factory->define(ClinicPhoto::class, function (Faker $faker) {
    $clinic_Id = Clinic::all()->random()->id;

    $data = [
        'url' => $faker->imageUrl($width=400, $height=300, 'cats'),
        'clinic_id' => $clinic_Id
    ];

    return $data;
});
