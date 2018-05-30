<?php


use App\Role;
use Illuminate\Database\Seeder;


class RolesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       $roles =  [Role::USER_ADMIN,Role::USER_TECHNICIAN,Role::USER_EMPLOYEE];
        foreach ($roles as $role) {
            factory(Role::class)->create([
                'role_name' => $role,
            ]);
        }
    }
}
