<?php


use App\Admin;
use App\Category;
use App\User;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(Admin::pluck('id')->toArray()),
        'description' => $faker->paragraph,
        'name' => $faker->word,
    ];
});
