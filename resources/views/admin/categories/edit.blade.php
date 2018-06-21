@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row align-self-stretch justify-content-md-center">
			<div class="col-md-12 my-3">
				<div class="bg-light px-5 py-4">
                <h2>Edition de la catégorie: </h2><small>Responsable: {{$category->user->name}}</small>
				</div>
			</div>
		</div>
		<div class="row align-self-stretch justify-content-md-center">
			<div class="right-col col col-md-6 my-4">
				<div class="p-5 bg-light">
					{{ Form::open(['route' => ['admin.categories.update', $category->id], 'method' => 'PATCH']) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Nom de la catégorie') }}
                        {{ Form::text('name', $category->name, ['class' => 'form-control'])}}
                    </div>

					<div class="form-group">

					</div>
                    <div class="form-group">
                        {{ Form::label('description', 'Description') }}
                        {{ Form::textarea('description', $category->description, ['class' => 'form-control', 'rows' => '5']) }}
                    </div>
                    <a class="btn btn-block btn-primary">Annuler</a>
                    {{ Form::submit('Soumettre', ['class' => 'btn btn-block btn-submit btn-primary']) }}
                    {{ Form::close() }}
				</div>
			</div>
		</div>

	</div>
@endSection