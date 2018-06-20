<?php

namespace Tests\Feature;

use App\Category;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;



class AdminCategoriesControllerTest extends TestCase
{

    /**
     * @test
     * @group CategoryFeature
     */
    public function un_administrateur_peu_creer_une_categorie()
    {

    }
    /**
     * @test
     * @group CategoryFeature
     */
    public function un_administrateur_peu_maj_une_categorie()
    {
        $this->withExceptionHandling();
        $user = factory(User::class)->create();
        $user->roles()->attach(random_int(1, 3));
        $this->be($user);
        $new_category = factory(Category::class)->create([
            'user_id' => $user->id,
        ]);

        $data = factory(Category::class)->raw();


        $this->post(route('admin.categories.update', $new_category->id), [
            'name' => $data['name'],
            'description' => $data['description'],
        ]);

        $this->assertDatabaseHas('categories', [
            'name' => $new_category->name,
            'description' => $new_category->description,
        ]);
    }

    /**
     * @test
     * @group CategoryFeature
     */
    public function un_administrateur_peu_voir_toutes_les_categories()
    {

    }

    /**
     * @test
     * @group CategoryFeature
     */
    public function un_administrateur_peu_editer_une_categorie()
    {

    }
    /**
     * @test
     * @group CategoryFeature
     */
    public function un_administrateur_peu_supprimer_une_categorie_suprimable()
    {

    }


}
