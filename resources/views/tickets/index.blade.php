@extends('layouts.app')

@section('content')
 <div class="container-fluid">
    <div class="row align-self-stretch justify-content-md-center">
      <div class="content-top p-4 col-md-12  m-0">
        <h1>Mes demandes ouvertes:</h1>
        <div class="col-md-10 auto">
          <div class="d-flex flex-row mt-3 justify-content-end">
            <select class="form-control w-25 mr-3 form-control-sm">
              <option>Toutes les catégories</option>
            </select>
            <select class="form-control w-25 mr-3 form-control-sm">
              <option>Statut: Ouvert</option>
            </select>
            <button class="btn btn-success" type="submit">Filter</button>
          </div>

        </div>
      </div>
        <div class="left-col col-md-10 ">


          <div class="listing-tickets mt-3">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Titre du ticket</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Ouvert par</th>
                <th scope="col">Priorité</th>
                <th scope="col">Statut</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
              <tr class="ticket" data-content="{{$ticket->description}}">
                <td style="width: 60%">
                  <span>{{$ticket->objet}} : </span>
                  <small>{{str_limit($ticket->description,100,'...')}}</small>
                </td>
                <td>{{$ticket->category->name}}</td>
                <td>{{$ticket->user->name}}</td>
                <td>{{$ticket->priority}}</td>
                <td>{{$ticket->status}}</td>
                <td><a href="{{route('tickets.show', ['ticket' => $ticket])}}">voir</a></td>
              </tr>
            @endforeach
            </tbody>
          </table>
          </div>
          {{$tickets->links()}}
        </div>
    </div>
 </div>
@endsection



