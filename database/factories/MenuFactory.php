<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;

$factory->define(App\Menu::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'titre' => $faker->word,
        'description' => $faker->text,
        'categorie' => $faker->word,
        'image_url' => $faker->word,
        'image_name' => $faker->word,
        'image_driver' => $faker->word,
    ];
});
