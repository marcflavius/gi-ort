<?php

namespace App\Http\Controllers;


use App\Category;
use App\Ticket;
use Auth;
use Illuminate\Http\Request;


class TicketsController extends Controller {


    protected  $validate_rules = [
        'objet'       => 'required|max:100',
        'description' => 'required|max:400',
        'category_id' => 'required|max:99',
        'priority'    => 'required|max:10',
        'status'      => 'required|max:10'
    ];

    public function __construct()
    {

        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @param string $q
     *
     * @return \Illuminate\Http\Response
     */
    public function index($q = 'en cours')
    {
        $tickets = Ticket::where('status',$q)->paginate(5);
        return view('tickets.index', compact('tickets'));

        $user = Auth::user();
        $tickets = $user->tickets()->latest()->paginate(5);
        $ticketsAll = Ticket::all();
        return view('tickets.index', compact('user', 'tickets', 'ticketsAll'));
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
        $ticket = new Ticket();
        $ticket->objet = $request->input('objet');
        $ticket->description = $request->input('description');
        $ticket->status = $request->input('status');
        $ticket->priority = $request->input('priority');
        $ticket->user_id = Auth::user()->id;
        $ticket->category_id = $request->input('category_id');
        $ticket->save();
        return redirect()->route('tickets.show', $ticket->id);
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
        $ticket = Ticket::find($id);
        $categories = Category::all();
        $categoryIdArray = $categories->pluck('name', 'id');
        $priorityArray = ['faible' => 'faible', 'normal' => 'normal', 'urgent' => 'urgent'];
        $statusArray = ['en cours' => 'en cours', 'fermé' => 'fermé', 'ouvert' => 'ouvert'];
        return view('tickets.edit', compact('ticket', 'categories', 'categoryIdArray', 'priorityArray', 'statusArray'));
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


                $this->validate($request, $tihs->validate_rules);
        $ticket->objet = $request->input('objet');
        $ticket->description = $request->input('description');
        $ticket->status = $request->input('status');
        $ticket->priority = $request->input('priority');
        $ticket->priority = $request->input('status');
        $ticket->update();
        return redirect()->route('tickets.show', ['id' => $ticket->id]);
    }


}
