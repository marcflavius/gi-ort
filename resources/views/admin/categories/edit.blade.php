@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row align-self-stretch justify-content-md-center">
			<div class="col-md-12 my-3">
				<div class="bg-light px-5 py-4">
					<h2>Edition de l'utilisateur: </h2><small>"Nom Prenom"</small>
				</div>
			</div>
		</div>
		<div class="row align-self-stretch justify-content-md-center">
			<div class="right-col col col-md-6 my-4">
				<div class="p-5 bg-light">
					{{ Form::open(['route' => ['admin.tickets.update',$ticket->id], 'method' => 'PATCH']) }}

                    <div class="form-group">
                        {{ Form::label('objet', 'Titre du ticket') }}
                        {{ Form::text('objet', $category->objet, ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('status', 'Statut') }}
                        {{ Form::select('status', $statusArray, $ticket->status,['class' => 'form-control form-control-sm']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('priority', 'Priorité') }}
                        {{ Form::select('priority', $priorityArray, $ticket->priority,['class' => 'form-control form-control-sm']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('category_id', 'Catégorie') }}
                        {{ Form::select('category_id', $categoryIdArray, $ticket->category->id,['class' => 'form-control form-control-sm']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', 'Description du problème') }}
                        {{ Form::textarea('description', $ticket->description, ['class' => 'form-control', 'rows' => '5'])}}
                    </div>
                    <a class="btn btn-block btn-primary">Cancel</a>
                    {{ Form::submit('Save', ['class' => 'btn btn-block btn-submit btn-primary']) }}
                    {{ Form::close() }}
				</div>
			</div>
		</div>

	</div>
@endSection