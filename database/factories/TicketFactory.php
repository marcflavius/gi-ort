<?php


use App\Category;
use App\Ticket;
use App\User;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {
    Ticket::truncate();
    
    return [
        'objet' => $faker->title,
        'description' => $faker->paragraph,
        'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
        'category_id' => $faker->randomElement(Category::pluck('id')->toArray()),
    ];
});
