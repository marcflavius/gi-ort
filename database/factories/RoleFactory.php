<?php


use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    $roles =  [Role::USER_ADMIN,Role::USER_TECHNICIAN,Role::USER_EMPLOYEE];
    return [
        'role_name' => $faker->randomElement([$roles]),
    ];
});
