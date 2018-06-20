<?php

namespace Tests\Feature;


use App\Ticket;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class UserTicketsControllerTest extends TestCase {

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


    /**
     * @test
     * @group
     */
    public function un_utilisateur_peut_maj_un_ticket()
    {
        {
            $this->withExceptionHandling();
            $user = factory(User::class)->create();
            $user->roles()->attach(random_int(1, 3));
            $this->be($user);
            $new_ticket = factory(Ticket::class)->create([
                'user_id' => $user->id,
            ]);

            $data = factory(Ticket::class)->raw();


            $this->post(route('tickets.update', $new_ticket->id), [
                'objet' => $data['objet'],
                'description' => $data['description'],
                'status' => $data['status'],
                'priority' => $data['priority'],
                'user_id' => $data['user_id'],
                'category_id' => $data['category_id'],
            ]);

            $this->assertDatabaseHas('tickets', [
                'description' => $new_ticket->description,
            ]);
        }
    }

}
