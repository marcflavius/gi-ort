@extends('layouts.app')

@section('content')
	<div class="container-fluid">

		<div class="row align-self-stretch justify-content-md-center">
			<div class="right-col col col-md-4 mt-5 ">
				<br><br><br>
				<div class="mx-1 px-1 display-tickets">

					<div class="card" style="">
						<div class="card-body">
							<h5 class="card-title">{{$ticket->objet}}</h5>
							<h6 class="card-subtitle mb-2 text-muted">Posté par: {{$ticket->user->name}}</h6>
							<p class="card-text">
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
							</p>


                            <br>
                            <a class="btn btn-block btn-primary" href="{{route('tickets.edit', ['ticket' => $ticket])}}" role="button" >Edit</a>
                            <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#deleteConfirmationModal">Delete</a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @if( true)
                                        {{ Form::open([
                                            'route' => ['tickets.destroy',$ticket->id],
                                            'method' => 'DELETE'
                                            ]) 
                                        }}
            							<button type="submit" class="btn btn-block btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Delete</button>
							            {{ Form::close()}}
			            			@endif
                                </div>
                            </div>
                        </div>
                    </div>
					<br><br>
				</div>
			</div>
		</div>
	</div>
@endSection