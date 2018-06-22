@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h2>Mes tickets:</h2>
						<div class="ml-auto">
							{{ Form::open( ['method' => 'GET']) }}
							
							<div class="align-items-center d-flex flex-row justify-content-end">
								<span class="mr-3">catégories:</span>
								 <select name="category" class="form-control mr-3 form-control-sm">
									<option>Toutes</option>
									@foreach($categories as $category)
										<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach

								</select>
								<span class="mr-3">status:</span> <select name="status"  class="form-control mr-3 form-control-sm">
									<option>Touts</option>
									@foreach($tickets as $ticket)
										<option value="{{$ticket->id}}">{{$ticket->name}}</option>
									@endforeach
								</select>
								<input type="submit" value="Filtre" class="btn btn-success ">
							</div>

							{{ Form::close()}}
						</div>
					</div>

				</div>

			</div>

			<div class="container-fluid">
				<div class="row align-self-stretch justify-content-md-center">

					<div class="col-md-12">


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



