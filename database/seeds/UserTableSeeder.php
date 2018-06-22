<?php


use App\User;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1; $i++) {
            factory(User::class)->create()->roles()->attach(1);
        }
        for ($i = 0; $i < 1; $i++) {
            factory(User::class)->create()->roles()->attach(2);
        }
        for ($i = 0; $i < 1; $i++) {
            factory(User::class)->create()->roles()->attach(3);
        }
    }

}
