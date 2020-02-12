<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'telephone' => $faker->phoneNumber,
       'users_id' => function(){
            $user=factory(App\User::class)->create(['role'=>'client']);
            $user->role="client";
            return $user->id;
         } 
 
    ];
});
