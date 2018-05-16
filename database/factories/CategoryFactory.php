<?php


use App\Category;
use App\User;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    Category::truncate();
    
    return [
        'description' => $faker->paragraph,
        'name' => $faker->word,
        'user_id' => $faker->randomElement(User::pluck('id')->toArray()),


    ];
});
