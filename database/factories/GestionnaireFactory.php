<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;

$factory->define(App\Gestionnaire::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'telephone' => $faker->phoneNumber,
     	 'users_id' => function(){
            $user=factory(App\User::class)->create(['role'=>'gestionnaire']);
            $user->role="gestionnaire";
            return $user->id;
         } 
 
    ];
});
