<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use \App\Models\{Clinic, Metro, Region, PriceType};

$factory->define(Clinic::class, function (Faker $faker) {
    $rChars = $faker->numberBetween($min = 50, $max = 200);
    $r_preview_text = $faker->numberBetween($min = 150, $max = 250);
    $r_detail_text = $faker->numberBetween($min = 1050, $max = 1550);
    $name = $faker->unique()->realText($maxNbChars = $rChars, $indexSize = 2);
    $slug = Str::slug($name);
    $work_from = $faker->numberBetween(7, 10).':'.$faker->randomElement($array = array ('00', '15','30','45'));
    $work_to = $faker->numberBetween(18, 24).':'.$faker->randomElement($array = array ('00', '15','30','45'));
    $phone = $faker->tollFreePhoneNumber;
    $mobile = $faker->e164PhoneNumber;
    $address = $faker->address;
    $distance = $faker->numberBetween(1, 12);
    $email = $faker->email;
    $rating = $faker->randomFloat($nbMaxDecimals = 1, $min = 2, $max = 4);
    $preview_text = $faker->realText($maxNbChars = $r_preview_text, $indexSize = 2);
    $preview_picture = $faker->imageUrl($width=400, $height=400, 'cats');
    $detail_text = $faker->realText($maxNbChars = $r_detail_text, $indexSize = 2);
    $official_name = $faker->catchPhrase;
    $supervisor = $faker->name();
    $foundation_year = $faker->numberBetween(1950, 2019);
    $map_coordinates = $faker->latitude($min = 60, $max = 61).','.$faker->longitude($min = 30, $max = 31);
    $specialists = $faker->numberBetween(4, 14);
    $created_at = $faker->dateTime();
    $region_Id = Region::all()->random()->id;
    $metro_Id = Metro::all()->random()->id;
    $price_Id = PriceType::all()->random()->id;

    $data = [
        'name' => $name,
        'slug' => $slug,
        'preview_picture' => $preview_picture,
        'preview_text' => $preview_text,
        'detail_text' => $detail_text,
        'work_from' => $work_from,
        'work_to' => $work_to,
        'phone' => $phone,
        'mobile' => $mobile,
        'address' => $address,
        'distance' => $distance,
        'email' => $email,
        'rating' => $rating,
        'official_name' => $official_name,
        'supervisor' => $supervisor,
        'foundation_year' => $foundation_year,
        'map_coordinates' => $map_coordinates,
        'specialists' => $specialists,
        'created_at' => $created_at,
        'updated_at' => $created_at,
        'region_id' => $region_Id,
        'metro_id' => $metro_Id,
        'price_type_id' => $price_Id,
    ];

    return $data;
});
