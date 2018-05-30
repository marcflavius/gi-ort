<?php


use App\RoleUser;
use App\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(RoleUser::class,20)->create();
    }

}