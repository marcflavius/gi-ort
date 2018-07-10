<?php


use App\Category;
use App\Ticket;
use App\User;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {

    return [
        'objet' => $faker->word,
        'description' => $faker->paragraph,
        'type' => $faker->randomElement(['demande','incide']),
        'status' => $faker->randomElement(['en_cours','ouvert','fermé']),
        'priority' => $faker->randomElement(['faible','normal','urgent']),
        'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
        'category_id' => $faker->randomElement(Category::pluck('id')->toArray()),
    ];

});
