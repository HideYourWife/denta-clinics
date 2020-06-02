<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use \App\Models\{Stock, Clinic, Region, Service};

$factory->define(Stock::class, function (Faker $faker) {
    $rChars = $faker->numberBetween($min = 50, $max = 200);
    $r_preview_text = $faker->numberBetween($min = 150, $max = 250);
    $name = $faker->realText($maxNbChars = $rChars, $indexSize = 2);
    $preview_picture = $faker->imageUrl($width=600, $height=400, 'cats');
    $preview_text = $faker->realText($maxNbChars = $r_preview_text, $indexSize = 2);
    $active_from = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now')->format('Y-m-d');
    $active_to = $faker->dateTimeBetween($startDate = 'now', $endDate = '45 days')->format('Y-m-d');
    $stock_percent = $faker->numberBetween(10, 45);
    $ad_picture = $faker->imageUrl($width=900, $height=300, 'cats');
    $show_in_ad = $faker->numberBetween(0, 1);
    $created_at = $faker->dateTime();
    $updated_at = $faker->dateTime();

    $clinic_Id = Clinic::all()->random()->id;
    $region_Id = Region::all()->random()->id;
    $service_Id = Service::all()->random()->id;

    $data = [
        'name' => $name,
        'preview_picture' => $preview_picture,
        'preview_text' => $preview_text,
        'active_from' => $active_from,
        'active_to' => $active_to,
        'stock_percent' => $stock_percent,
        'ad_picture' => $ad_picture,
        'show_in_ad' => $show_in_ad,
        'created_at' => $created_at,
        'updated_at' => $updated_at,
        'clinic_Id' => $clinic_Id,
        'region_Id' => $region_Id,
        'service_Id' => $service_Id,
    ];

    return $data;
});
