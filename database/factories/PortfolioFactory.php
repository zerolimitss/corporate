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

$factory->define(Corp\Portfolio::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'text' => $faker->realText(300),
        'alias' => 'project'.rand(1,10000),
        'customer' => $faker->name(),
        'images' => '{"mini":"0071-175x175.jpg","max":"0071-770x368.jpg","path":"0071.jpg"}',
        'filter_alias' => 'brand-identity',
    ];
});
