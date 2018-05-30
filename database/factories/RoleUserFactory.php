<?php


use App\Role;
use App\RoleUser;
use App\User;
use Faker\Generator as Faker;


$factory->define(RoleUser::class, function (Faker $faker) {
    $user = factory(User::class)->create();
    $role = factory(Role::class)->create(
        [
            'role_name' => $faker->randomElement(['admin','technicen','employee'])
            ]);

    return [
        'user_id' =>  $user->id,
        'role_id' =>  $role->id
    ];
});
