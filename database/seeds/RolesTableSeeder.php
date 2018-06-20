<?php


use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['role_name' => Role::USER_ADMIN,]);
        Role::create(['role_name' => Role::USER_EMPLOYEE,]);
        Role::create(['role_name' => Role::USER_TECHNICIAN,]);
    }
}
