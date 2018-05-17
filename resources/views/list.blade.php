@extends('layouts.app')

@section('content')
 <div class="container-fluid">

      <div class="row align-self-stretch justify-content-md-center">
          <div class="left-col col-md-8 my-5">
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

            <div class="listing-tickets mt-3">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Titre du ticket</th>
                  <th scope="col">Catégorie</th>
                  <th scope="col">Ouvert par</th>
                  <th scope="col">Priorité</th>
                  <th scope="col">Statut</th>
                </tr>
              </thead>
              <tbody>

              {{dd($tickets)}}
              @foreach($tickets as $ticket)
                <tr>
                  <td style="width: 60%">
                    <span>{{$ticket->objet}} :
                      <small>{{$ticket->description}}</small>
                    </span>
                  </td>
                  <td>{{$ticket->category_id}}</td>
                  <td>{{$ticket->user_id}}</td>
                  <td>1</td>
                  <td>Ouvert</td>
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
          <!-- Right Panel : Ticket displaying here-->
          <div class="right-col col col-md-4 mt-5 ">
            <br><br><br>
            <div class="mx-1 px-1 display-tickets">
              <div class="card" style="">
                <div class="card-body">
                  <h5 class="card-title">Titre du ticket</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Posté par: Nom Prénom</h6>
                  <p class="card-text">
                    <span class="user-field">Statut:
                      <select class="form-control  form-control-sm">
                        <option>Statut: Ouvert</option>
                      </select>
                    </span><br>
                    <span class="user-field">Catégorie:
                      <select class="form-control  form-control-sm">
                        <option>Toute les catégories</option>
                      </select>
                    </span><br><br>
                    <span class="user-field">Description:
                    <hr>
                      <span class="user-name">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        eu tincidunt enim, sit amet varius diam. Sed non eros tellus.
                        Donec laoreet ante eu neque vehicula, ac congueeros commodo.
                        Curabitur luctus  vehicula eros, nec tempor diam commodo in.
                        Phasellus eget massa ut ex vehicula dictum. Nullam maximus
                        eros nunc, at laoreet lectus ermentum vitae. Proin faucibus eu
                        nisi a maximus.
                      </span>
                    </span>
                  </p>
                  <br>
                  <a class="btn btn-block btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Edit</a>
                  <a class="btn btn-block btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Delete</a>
                </div>
              </div>



              <br><br>

            </div>
          </div>
      </div>

    </div>
@endsection



