<?php

namespace Tests\Feature;


use App\Ticket;
use App\User;
use Faker\Factory as Faker;


class AdminTicketsControllerTest extends Feature {

    protected $ticket;


    public function setUp()
    {
        parent::setUp();
        //        monde
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
    //    public function un_utilisateur_peut_voir_tout_ces_tickets()
    //    {
    //        $user = $this->makeUser();
    //        $this->be($user);
    //        $this->get("tickets")
    //             ->assertSeeText($this->ticket->status)
    //             ->assertSeeText($this->ticket->categorie)
    //             ->assertSeeText($this->ticket->user_idd)
    //             ->assertViewIs('tickets.index');
    //    }
    //    /**
    //     * @test
    //     * @group ticketFeature
    //     */
    //    public function un_utilisateur_peut_creer_un_ticket()
    //    {
    //        //        monde
    //        $ticket = factory(Ticket::class)->raw();
    //        $user = $this->makeUser();
    //        $this->be($user);
    //        //        action
    //        $this->post(route('tickets.store'), $ticket);
    //        $this->assertDatabaseHas('tickets', [
    //            'status'      => $ticket['status'],
    //            'priority'    => $ticket['priority'],
    //            'objet'       => $ticket['objet'],
    //            'description' => $ticket['description'],
    //        ]);
    //    }
    /**
     * @test
     * @group ticketFeature
     */
    public function un_technitien_peut_modifier_le_status_dun_ticket()
    {
        $faker = Faker::create();
        $tech = $this->makeTechnician();
        $ticket = factory(Ticket::class)->create(['status' => 'ouvert',]);
        $this->post(route('tickets.update', $ticket->id),
            $status = $faker->randomElements([
                'en cours', 'fermé'
            ]));
        $this->assertDatabaseHas('tickets', [
            'status' => $status[0],
        ]);
    }


    /**
     * @test
     * @group ticketFeature
     */
    public function un_administrateur_peut_modifier_le_status_dun_ticket()
    {
        $faker = Faker::create();
        //        $tech = $this->makeAdmin();
        $ticket = factory(Ticket::class)->create(['status' => 'ouvert',]);
        $this->post(route('tickets.update', $ticket->id),
            $status = $faker->randomElements([
                'en cours', 'fermé'
            ]));
        $this->assertDatabaseHas('tickets', [
            'status' => $status[0],
        ]);
    }

}
