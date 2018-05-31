<?php

namespace Tests\Feature;


use App\Ticket;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class TicketsControllerTest extends TestCase {

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
//        $this->withoutExceptionHandling();
//        monde
         $user = factory(User::class)->create();
        $ticket = factory(Ticket::class)->create();
//        action
        $this->be($user);
        
//        comparaison
      $r =   $this->get("tickets",$user)
//             ->assertViewHas('tickets.index',$user)
             ->assertSeeText($ticket->status)
             ->assertSeeText($ticket->categorie)
             ->assertSeeText($ticket->user_idd)
             ->assertViewIs('tickets.index');
//      $r = (array)$r;
//        dd($r);
        ;


    }
    /**
     * @test
     * @group ticketFeature
     */
    public function un_utilisateur_peut_creer_un_ticket()
    {
    }
    /**
     * @test
     * @group ticketFeature                           1
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
