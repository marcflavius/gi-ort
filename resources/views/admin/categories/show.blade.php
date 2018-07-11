@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row align-self-stretch justify-content-md-center">
			<div class="col-md-12 my-3">
				<div class="bg-light px-5 py-4">
					<h2>Catégorie {{$category->id}} : {{$category->name}} </h2>
				</div>
			</div>
		</div>
		<div class="row align-self-stretch justify-content-md-center">
			<div class="right-col col col-md-6 my-4">
				<div class="p-5 bg-light">
					<span class="user-field">Nom de la catégorie:
						<p>{{$category->name}}</p>
					</span><br>
					<span class="user-field">Description:
						<p>{{$category->description}}</p>
					</span><br>
					<span class="user-field">Responsable:
						  <p>{{$category->user->name}}</p>
					</span><br><br>
				</div>
			</div>	
		</div>
		@include('assets.alert')
	</div>
@endSection