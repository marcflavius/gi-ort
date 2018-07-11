<?php


use App\Category;
use App\Role;
use App\RoleUser;
use App\Ticket;
use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        if (env('DB_CONNECTION') === 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
       }
        
        
        RoleUser::truncate();
        Role::truncate();
        Category::truncate();
        Ticket::truncate();
        User::truncate();

        /*************************
         * create 20 users and  3 role
         * with admin technician and employee privilages
         *************************/
        $this->call(UserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        //$this->call(TicketsTableSeeder::class);
        
//admin
        $admin = factory(User::class)->create([
            'email' => 'super@app.com',
            'password' => bcrypt('password'),

        ]);
        $admin->roles()->attach(1);


        factory(Ticket::class, 20)->create([
            'user_id' => $admin->id,
        ]);
//tech
        $tech = factory(User::class)->create([
            'email' => 'tech@app.com',
            'password' => bcrypt('password'),

        ]);
        $tech->roles()->attach(2);


        factory(Ticket::class, 20)->create([
            'user_id' => $tech->id,
        ]);
//employee
        $emp = factory(User::class)->create([
            'email' => 'emp@app.com',
            'password' => bcrypt('password'),

        ]);
        $emp->roles()->attach(3);


        factory(Ticket::class, 20)->create([
            'user_id' => $emp->id,
        ]);


        if (env('DB_CONNECTION') === 'mysql') {
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
