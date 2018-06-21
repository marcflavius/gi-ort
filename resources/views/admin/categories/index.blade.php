@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">


				<div class="card-body">
					<div class="d-flex align-items-center">

						<h2>Gestion des catégories: </h2>
						<div class="ml-auto">
							<a class="btn btn-success " href="{{route('admin.categories.create')}}"> Créer
								une Catégorie</a>
						</div>

					</div>
				</div>

			</div>

		</div>
		<div class="row align-self-stretch justify-content-md-center">
			<div class="left-col col-md-2 my-4">
				<div class="bo-menu p-0 bg-light">
					<ul class="list-group list-group-flush">
						<li class="list-group-item py-4"><a href="{{route('admin.categories.index')}}">Gestion des Catégories</a></li>
						<li class="list-group-item py-4"><a href="{{route('admin.users.index')}}">Gestion des Utilisateurs</a></li>
						<li class="list-group-item py-4"><a href="{{route('admin.tickets.index')}}">Gestion des Tickets</a></li>
					</ul>
				</div>
			</div>
			<!-- Right Panel : Ticket displaying here-->
			<div class="right-col col col-md-10 my-4">
				<div class="p-0 bg-light">
					<table class="table table-striped">
						<thead>
						<tr>
							<th scope="col">Nom</th>
							<th scope="col">Description</th>
							<th scope="col">Responsable</th>
							<th scope="col">Action</th>
						</tr>
						</thead>
						<tbody>
						@foreach($categories as $category)
							<tr>
								<td>{{$category->name}}</td>
								<td>{{str_limit($category->description,100,'...')}}</td>
								<td>{{$category->user->name}}</td>
								<td>
									<a href="{{route('admin.categories.show', ['category' => $category])}}">voir</a> |
									<a href="{{route('admin.categories.edit', ['category' => $category])}}">editer</a>
								</td>
							</tr>
						@endforeach	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endSection