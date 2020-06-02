<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use \App\Models\News;

$factory->define(News::class, function (Faker $faker) {
//    $faker = Faker\Factory::create('ru_RU');
    $rChars = $faker->numberBetween($min = 50, $max = 200);
    $r_preview_text = $faker->numberBetween($min = 150, $max = 250);
    $r_detail_text = $faker->numberBetween($min = 550, $max = 950);
    $title = $faker->realText($maxNbChars = $rChars, $indexSize = 2);
    $slug = Str::slug($title);
    $preview_picture = $faker->imageUrl($width=400, $height=400, 'cats');
    $detail_picture = $faker->imageUrl($width=1200, $height=600, 'cats');
    $preview_text = $faker->realText($maxNbChars = $r_preview_text, $indexSize = 2);
    $text_1 = $faker->realText($maxNbChars = $r_detail_text, $indexSize = 2);
    $text_2 = $faker->realText($maxNbChars = $r_detail_text, $indexSize = 2);
    $created_at = $faker->dateTime();
//    $rId = News::all()->random()->id;
//    $max = DB::table('news')->count();
//    $max = intval($max) > 0 ? intval($max): 1;
//    $rId = $faker->numberBetween($min = 1, $max);
//    $rId = intval($rId) > 0 ? intval($rId): 1;

    $data = [
        'title' => $title,
        'slug' => $slug,
        'preview_picture' => $preview_picture,
        'preview_text' => $preview_text,
        'detail_picture' => $detail_picture,
        'text_1' => $text_1,
        'text_2' => $text_2,
        'recommended' => $faker->numberBetween(0, 1),
        'created_at' => $created_at,
        'updated_at' => $created_at,
        'news_id' => 1,
    ];
    return $data;
});
