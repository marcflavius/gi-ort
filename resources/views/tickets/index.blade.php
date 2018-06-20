@extends('layouts.app')

@section('content')
 <div class="container-fluid">
    <div class="row align-self-stretch justify-content-md-center">
      <div class="content-top p-4 col-md-12  m-0">
        <h1>Mes demandes ouvertes:</h1>
        <div class="d-flex flex-row mt-3">
          <select class="form-control w-50 mr-3 form-control-sm">
            <option>Toutes les catégories</option>
          </select>
          <select class="form-control w-25 mr-3 form-control-sm">
            <option>Statut: Ouvert</option>
          </select>
          <a class="btn btn-primary w-25 " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Valider</a>
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
                  <small>{{$ticket->description}}</small>
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
          <nav aria-label="Page navigation ">
            <ul class="pagination justify-content-end mt-3">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
    </div>
 </div>
@endsection


