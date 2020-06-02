<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use \App\Models\{Blog, BlogCategory};

$factory->define(Blog::class, function (Faker $faker) {
    $rChars = $faker->numberBetween($min = 50, $max = 200);
    $r_preview_text = $faker->numberBetween($min = 150, $max = 250);
    $r_detail_text = $faker->numberBetween($min = 1050, $max = 1550);
    $title = $faker->realText($maxNbChars = $rChars, $indexSize = 2);
    $slug = Str::slug($title);
    $preview_picture = $faker->imageUrl($width=400, $height=400, 'cats');
    $detail_picture = $faker->imageUrl($width=1200, $height=600, 'cats');
    $preview_text = $faker->realText($maxNbChars = $r_preview_text, $indexSize = 2);
    $detail_text = $faker->realText($maxNbChars = $r_detail_text, $indexSize = 2);
    $created_at = $faker->dateTime();
    $rId = BlogCategory::all()->random()->id;

    $data = [
        'title' => $title,
        'slug' => $slug,
        'preview_picture' => $preview_picture,
        'preview_text' => $preview_text,
        'detail_picture' => $detail_picture,
        'detail_text' => $detail_text,
        'created_at' => $created_at,
        'updated_at' => $created_at,
        'blog_category_id' => $rId,
    ];
    return $data;
});
