<?php

namespace Tests\Feature;


use App\Ticket;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class TicketsControllerTest extends TestCase {

    protected $user;
    protected $ticket;


    public function setUp()
    {
        parent::setUp();
        //        monde
        $this->user = factory(User::class)->create();
        $this->ticket = factory(Ticket::class)->create();
    }


    /**
     * @test
     * @group ticketFeature
     */
    public function un_utilisateur_peut_se_connecter()
    {

    }


    /**
     * @test
     * @group ticketFeature
     */
    public function un_utilisateur_peut_voir_tout_ces_tickets()
    {

        $this->be($this->user);
        $this->get("tickets")
             ->assertSeeText($this->ticket->status)
             ->assertSeeText($this->ticket->categorie)
             ->assertSeeText($this->ticket->user_idd)
             ->assertViewIs('tickets.index');
    }


    /**
     * @test
     * @group ticketFeature
     */
    public function un_utilisateur_peut_creer_un_ticket()
    {
        //        monde
        $ticket = factory(Ticket::class)->raw();
        $this->be($this->user);
        //        action
        $this->post(route('tickets.store'), $ticket);

        $this->assertDatabaseHas('tickets', [
                'status' => $ticket['status'],
                'priority' => $ticket['priority'],
                'objet' => $ticket['objet'],
                'description' => $ticket['description'],
        ]);
        
    }


    /**
     * @test
     * @group ticketFeature
     */
    public function un_technitien_peut_modifier_le_status_dun_ticket()
    {
        

    }


    /**
     * @test
     * @group ticketFeature
     */
    public function un_administrateur_peut_modifier_le_status_dun_ticket()
    {

    }

}
