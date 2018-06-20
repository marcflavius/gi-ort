<?php

namespace Tests\Unit;


use App\RoleUser;
use App\Ticket;
use App\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class UserTest extends TestCase {

    /**
     * A basic test example.
     * @group user
     * @return void
     * @test
     */
    public function il_posede_plusieurs_tickets()
    {
        $user = factory(User::class)->create();
        factory(Ticket::class)->create([
            'user_id' => $user->id,
        ]);
        
        $this->assertInstanceOf(Ticket::class, $user->tickets()->first());
    }


}
