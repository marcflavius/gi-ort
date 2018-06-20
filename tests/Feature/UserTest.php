<?php

namespace Tests\Feature;

use App\Ticket;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
    * @test
    * @group 
    */
    public function un_utilisateur_peut_creer_un_ticket()
    {
        {
            $this->withExceptionHandling();
            $user = factory(User::class)->create();
            $user->roles()->attach(2);
            $this->be($user);

            $data = factory(Ticket::class)->raw([
                'user_id' => $user->id,
            ]);

            $this->post(route('tickets.store'), $data);

            $this->assertDatabaseHas('tickets', [
                'description' => $data['description'],
            ]);

        }

    }
}
