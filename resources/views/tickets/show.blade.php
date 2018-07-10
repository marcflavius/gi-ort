@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row align-self-stretch justify-content-md-center">
		<div class="col-md-4 d-flex justify-content-around">
			<div class="card my-5" style="">
				<div class="card-body">
					<div class="custom-card-header">
						<h3 class="card-title">{{$ticket->objet}}</h3>
						<hr>
						<h6 class="card-subtitle mb-2 text-muted">Posté par: {{$ticket->user->name}}</h6>
					</div>
					<br>
					<p class="card-text">
						<div class="custom-card-header">
						<span class="user-field">Statut:
							<span>{{$ticket->status}}</span>
						</span><br>
						<span class="user-field">Priorité:
							<span>{{$ticket->priority}}</span>
						</span><br>
						<span class="user-field">Catégorie:
								<span>{{$ticket->category->name}}</span>
						</span><br>
						<span class="user-field">Type:
								<span>{{$ticket->type}}</span>
						</span><br><br>
						<span class="user-field">Description:
							<hr>
								<span class="ticket-description">
									{{$ticket->description}}
								</span>
							</span>
						</div>
					</p>
					<br>
					<div class="d-flex justify-content-md-center mt-4 row">
						<a class="btn col-5 py-4 mr-4 btn-primary" href="{{route('tickets.edit', ['ticket' => $ticket])}}" role="button" >Editer</a>
						<a class="btn col-5 py-4 ml-4 btn-danger" href="{{route('tickets.index', ['ticket' => $ticket])}}" role="button" >Retour</a>
					</div>
				</div>
			</div>
			<br><br>
		</div>
	</div>
</div>
@endSection