<?php


use App\Employee;
use App\User;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {

    $user = factory(User::class)->create();;
    

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];});
