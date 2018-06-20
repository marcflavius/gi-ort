<?php


use App\Role;
use App\RoleUser;
use App\User;
use Faker\Generator as Faker;


$factory->define(RoleUser::class, function (Faker $faker) {
    $user = factory(User::class)->create();
    $role = random_int(1, 3);

    return [
        'user_id' =>  $user->id,
        'role_id' =>  $role
    ];
});
