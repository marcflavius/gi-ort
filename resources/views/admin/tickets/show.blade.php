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
							{{$ticket->description}}
						</span>
					</span>
					<hr>
					@auth
						@if(auth()->user()->isAdmin())
						<a class="btn btn-block btn-primary" data-toggle="modal" data-target="#deleteConfirmationModal">Delete</a>

						@endif
					@endauth
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
			     aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							@auth
								@if(auth()->user()->isAdmin())
								{{ Form::open([
										'route' => ['admin.tickets.destroy',$ticket->id],
										'method' => 'DELETE'
										])
								}}
								<button type="submit" class="btn btn-block btn-primary" data-toggle="collapse"
								        href="#collapseExample" role="button" aria-expanded="false"
								        aria-controls="collapseExample">Delete
								</button>
								{{ Form::close()}}
								@endif
							@endauth
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
@endSection