<?php

namespace App\Http\Controllers;

use App\Category;
use App\Ticket;
use App\TicketFilters;
use Auth;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    protected $validate_rules = [
        'objet'       => 'required|max:100',
        'status'       => 'required|max:100',
        'description' => 'required|max:400',
        'category_id' => 'required|max:99',
        'priority'    => 'required|max:10',
        'type'        => 'required|max:50',
    ];

    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param TicketFilters $filters
     *
     * @return \Illuminate\Http\Response
     */

    public function index(TicketFilters $filters)
    {

        $tickets    = Auth::user()->tickets()->select($filters)->paginate(5);
        $types      = ["demande", "incident"];
        $status     = ["en_cours", "ouvert", "fermé"];
        $priorities = ['faible', 'normal', 'urgent'];
        $categoryIdArray = Category::list();
        $user       = Auth::user();

        return view('tickets.index', compact('user', 'tickets', 'categoryIdArray', 'status', 'types', 'priorities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user            = Auth::user();
        $categories      = Category::all();
        $categoryIdArray = $categories->pluck('name', 'id');
        $priorityArray   = ['faible' => 'faible', 'normal' => 'normal', 'urgent' => 'urgent'];
        $statusArray     = ['en_cours' => 'en_cours', 'fermé' => 'fermé', 'ouvert' => 'ouvert'];

        return view('tickets.create', compact('user', 'categories', 'categoryIdArray', 'priorityArray', 'statusArray'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, $this->validate_rules);
        $ticket              = new Ticket();
        $ticket->objet       = $request->input('objet');
        $ticket->status       = $request->input('status');
        $ticket->description = $request->input('description');
        $ticket->priority    = $request->input('priority');
        $ticket->user_id     = Auth::user()->id;
        $ticket->category_id = $request->input('category_id');
        $ticket->type        = $request->input('type');
        $ticket->save([
            'status' => 'ouvert',
        ]);

        return redirect()->route('tickets.show', $ticket->id)->with('success', 'Le ticket a été créé avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $ticket = Ticket::find($id);

        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
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
        $statusArray     = ['en_cours' => 'en_cours', 'fermé' => 'fermé', 'ouvert' => 'ouvert'];

        return view('tickets.edit', compact('ticket', 'user', 'categories', 'categoryIdArray', 'priorityArray', 'statusArray','typeArray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
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

        return redirect()->route('tickets.show', ['id' => $ticket->id])->with('success','le ticket a été mise à jour avec succès');
    }
}
