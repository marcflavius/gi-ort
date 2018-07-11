@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row align-self-stretch justify-content-md-center">
			<div class="col-md-12 my-3">
				<div class="bg-light px-5 py-4">
					<h2>Ticket {{$ticket->id}} </h2>
				</div>
			</div>
		</div>
		<div class="row align-self-stretch justify-content-md-center">
			<div class="right-col col col-md-6 my-4">
				<div class="p-5 bg-light">
					<span class="user-field">Statut:
						<small>{{$ticket->status}}</small>
					</span><br>
					<span class="user-field">Priorité:
						<small>{{$ticket->priority}}</small>
					</span><br>
					<span class="user-field">Catégorie:
						  <small>{{$ticket->category->name}}</small>
					</span><br><br>
					<span class="user-field">Description:
						<hr>
						<span class="ticket-description">
							{{str_limit($ticket->description,100,'...')}}
						</span>
					</span>
					<hr>
				<a href="{{route('admin.tickets.index')}}" class="btn w-25 btn-primary">Annuler</a>
				</div>
			</div>
		</div>

	</div>
@endSection