<?php

use Faker\Generator as Faker;

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

$factory->define(Corp\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'text' => $faker->realText(),
        'description' => $faker->realText(300),
        'alias' => str_random(16),
        'image' => '{"mini":"0037-55x55.jpg ","max":"00212-816x282.jpg ","path":"0081-700x345.jpg"}',
        'user_id' => 1,
        'category_id' => rand(1,4),
    ];
});
