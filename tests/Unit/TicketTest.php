<?php

namespace Tests\Unit;


use App\Ticket;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class TicketTest extends TestCase {

    /**
     * @test
     * @group ticket
     */
    public function il_est_poseder_par_un_utilisateur()
    {
        $user_id = factory(User::class)->create()->id;
        $ticket = factory(Ticket::class)->create([
            'user_id' => $user_id,
        ]);
        $this->assertInstanceOf(User::class, $ticket->user);
    }

}
