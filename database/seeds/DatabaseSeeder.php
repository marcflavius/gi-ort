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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        RoleUser::truncate();
        Role::truncate();
        Category::truncate();
        Ticket::truncate();
        User::truncate();

        /*************************
         * create 20 users and  3 role
         * with admin technician and employee privilages
         *************************/
        $this->call(RoleUserTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        factory(User::class)->create([
            'email' => 'super@app.com',
            'password' => bcrypt('password'),
            
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
