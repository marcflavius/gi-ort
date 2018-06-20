<?php

namespace App\Http\Controllers;


use App\Category;
use App\Ticket;
use Auth;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class TicketsController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
        //            $this->middleware('role');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $tickets = $user->tickets()->latest()->paginate(10);
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
        $rules = [
            'objet'       => 'required',
            'description' => 'required',
            'status'      => 'required',
            'priority'    => 'required',
        ];
        $this->validate($request, $rules);
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

        $rules = [
            'objet'       => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'priority'    => 'required',
            'status'      => 'required'
        ];
        //        $this->validate($request, $rules);
        $ticket->objet = $request->input('objet');
        $ticket->description = $request->input('description');
        $ticket->status = $request->input('status');
        $ticket->priority = $request->input('priority');
        $ticket->priority = $request->input('status');
        $ticket->update();
        return redirect()->route('tickets.show', ['id' => $ticket->id]);
    }


}
