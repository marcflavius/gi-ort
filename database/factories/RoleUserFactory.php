<?php


use App\RoleUser;
use App\User;
use Faker\Generator as Faker;

$factory->define(RoleUser::class, function (Faker $faker) {

    

    return [
        'user_id' => 
            $faker->randomElement(User::pluck('id')->toArray()),
        'role_id' => $faker->randomElement([1,2,3]),
    ];
});
