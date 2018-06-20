<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminUsersControllerTest extends TestCase
{
    /**
     *
     * @test
     * @group UserFeature
     */
    public function un_administrateur_peut_creer_un_utilisateur()
    {
        $this->withExceptionHandling();
        $user = factory(User::class)->create();
        $user->roles()->attach(2);

        $this->be($user);
        $data = factory(User::class)->raw();
        $this->post(route('admin.users.store'), $data+[
                'password_confirmation' => $data['password'],
            ]);
        $this->assertDatabaseHas('users', [
            'name' => $data['name'],
        ]);

    }

    /**
     * @test
     * @group UserFeature
     */
    public function un_administrateur_peut_voir_tous_les_utilisateurs()
    {
    }
    /**
     * @test
     * @group UserFeature
     */
    public function un_administrateur_peut_voir_un_utilisateur()
    {
    }


    /**
     * @test
     * @group UserFeature
     */
    public function un_administrateur_peut_editer_un_utilisateur()
    {
    }

    /**
     * @test
     * @group UserFeature
     */
    public function un_administrateur_peut_supprimer_un_utilisateur()
    {
    }


}
