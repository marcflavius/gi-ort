<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Category;
use App\TicketFilters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminTicketController extends Controller
{
    protected $validate_rules = [
        'objet'       => 'required|max:100',
        'status' => 'required|max:100',
        'description' => 'required|max:400',
        'category_id' => 'required|max:99',
        'priority'    => 'required|max:10',
        'type'        => 'required|max:50',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TicketFilters $filters)
    {
        $user = Auth::user();

        $tickets = Ticket::select($filters)->paginate(10);
        $types = ["demande", "incident"];
        $status = ["en_cours", "ouvert", "fermé"];
        $priorities = ['faible','normal','urgent'];
        $categoryIdArray = Category::list();

        return view('admin.tickets.index',
            compact('user', 'tickets', 'categoryIdArray', 'status','types','priorities'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $categories = Category::all();
        $categoryIdArray = $categories->pluck('name', 'id');
        $priorityArray = ['faible' => 'faible', 'normal' => 'normal', 'urgent' => 'urgent'];
        $statusArray = ['en cours' => 'en cours', 'fermé' => 'fermé', 'ouvert' => 'ouvert'];
        return view('admin.tickets.create', compact('user', 'categories', 'categoryIdArray', 'priorityArray', 'statusArray'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('admin.tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket          = Ticket::find($id);
        $user            = Auth::user();
        $categories      = Category::all();
        $categoryIdArray = $categories->pluck('name', 'id');
        $typeArray = ['incident' => 'incident', 'demande' => 'demande'];
        $priorityArray   = ['faible' => 'faible', 'normal' => 'normal', 'urgent' => 'urgent'];
        $statusArray     = ['en_cours' => 'en cours', 'fermé' => 'fermé', 'ouvert' => 'ouvert'];

        return view('admin.tickets.edit', compact('ticket', 'user', 'categories', 'categoryIdArray', 'priorityArray', 'statusArray','typeArray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {

        $this->validate($request, $this->validate_rules);
        $ticket->objet       = $request->input('objet');
        $ticket->description = $request->input('description');
        $ticket->status      = $request->input('status');
        $ticket->category_id      = $request->input('category_id');
        $ticket->priority    = $request->input('priority');
        $ticket->type    = $request->input('type');
        $ticket->update();

        return redirect()->route('tickets.show', ['id' => $ticket->id]);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = Ticket::findOrFail($id);
        $c->destroy($id);
        return redirect()->route('admin.tickets.index')->with('success','Le ticket à été supprimé avec succès');
    }


}
