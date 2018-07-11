@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row align-self-stretch justify-content-md-center">
			<div class="col-md-12 my-3">
				<div class="bg-light px-5 py-4">
					<h2>Utilisateur {{$user->id}} : {{$user->name}} </h2>
				</div>
			</div>
		</div>
		<div class="row align-self-stretch justify-content-md-center">
			<div class="right-col col col-md-6 my-4">
				<div class="p-5 bg-light">
					<span class="user-field">Nom:
						<p>{{$user->name}}</p>
					</span><br>
					<span class="user-field">email:
						<p>{{$user->email}}</p>
					</span><br>
					<span class="user-field">Mot de passe:
						  <p>{{$user->password}}</p>
					</span><br><br>
					<hr>
					<a href="{{route('admin.users.index')}}" class="btn w-25 btn-primary">Annuler</a>
				</div>
			</div>
		</div>

	</div>
@endSection