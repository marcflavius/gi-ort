<?php


use App\Role;
use App\RoleUser;
use App\User;
use Faker\Generator as Faker;


$factory->define(RoleUser::class, function (Faker $faker) {
    $user = factory(User::class)->create();
    
    return [
        'user_id' =>  $user->id,
        'role_id' =>  $faker->randomElement(Role::pluck('id')->toArray())
    ];
});
