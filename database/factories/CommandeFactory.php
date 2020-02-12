<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;

$factory->define(App\Commande::class, function (Faker $faker) {
    $client_id=App\Client::get()->random()->id;
   $menu_id=App\Menu::get()->random()->id;

    return [
       // 'clients_id' => factory(App\Client::class),
        'clients_id' => function() use($client_id){
         return $client_id;
           },
        //'menus_id' => factory(App\Menu::class),
    
        'menus_id' => function () use ($menu_id) {
            return $menu_id;

             },

        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
        'adresse' => $faker->word,
    ];
});
