<?php


use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cat = [
            'Problème de bureau',
            'Panne générale',
            'Problème de souris',
            'Problème internet',
            ];

        foreach ($cat as $key => $value) {
            factory(Category::class)->create([
                'name' => $value,
            ]);

        }        
        
    }
}
