<?php


use App\Category;
use App\User;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $user = factory(User::class)->create();
//    dd($user->id);
    $user->roles()->attach(1);
    return [
        'user_id' => $user->id,
        'description' => $faker->paragraph,
        'name' => $faker->word,
    ];
});
