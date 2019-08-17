<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'titulo'=> $faker->sentence($nbWords = 3, $variableNbWords = true),
        'descripcion'=> $faker->sentence($nbWords = 10, $variableNbWords = true),
        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
