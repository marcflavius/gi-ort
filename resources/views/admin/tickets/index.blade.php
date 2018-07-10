@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">


				<div class="card-body">
					<div class="d-flex align-items-center">

						<h2>Gestion des tickets: </h2>
						@include('assets.filter')

					</div>
				</div>

			</div>

		</div>
		<div class="row align-self-stretch justify-content-md-center">
			<div class="left-col col-md-2 my-4">
				<div class="bo-menu p-0 bg-light">
					<ul class="list-group list-group-flush">

						@auth()
							@if(auth()->user()->isAdmin())
								<li class="list-group-item py-4"><a href="{{route('admin.categories.index')}}">Gestion des
										Catégories</a></li>

								<li class="list-group-item py-4"><a href="{{route('admin.users.index')}}">Gestion des
										Utilisateurs</a></li>
							@endif
						@endauth

						<li class="list-group-item py-4"><a href="{{route('admin.tickets.index')}}">Gestion des
								Tickets</a></li>

					</ul>
				</div>
			</div>
			<div class="right-col col col-md-10 my-4">
				<div class="p-0 bg-light">
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
							<tr>
								<td style="width: 48%">
									<span>{{$ticket->objet}} :
										<small>{{str_limit($ticket->description,100,'...')}}</small>
									</span>
								</td>
								<td>{{$ticket->category->name}}</td>
								<td>{{$ticket->user->name}}</td>
								<td>{{$ticket->priority}}</td>
								<td>{{$ticket->status}}</td>
								<td style="width: 15%">
									<a href="{{route('admin.tickets.show', ['ticket' => $ticket])}}">voir</a> |
									<a href="{{route('admin.tickets.edit', ['ticket' => $ticket])}}">editer</a>
									@auth
										@if(auth()->user()->isAdmin())
											| <a class="delete-me" data-id="{{$ticket->id}}" href="#" style="color:red"
                                                  data-toggle="modal"
												data-target="#deleteConfirmationModal">supprimer</a>

										@endif
									@endauth
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				@include('assets.modal-delete-tickets')
				</div>
				{{$tickets->links()}}

			</div>
		</div>
	</div>

@endSection