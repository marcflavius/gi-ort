@extends('layouts.app')

@section('content')
    <div class="container-fluid">

    <div class="row align-self-stretch justify-content-md-center">
        <div class="col-md-7 d-flex justify-content-around">
            <div class="card my-5" style="">
                <div class="card-body">
        @include('assets.errors')
                <div class="custom-card-header">
                    <h3 class="card-title">Editer un ticket:</h3>
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted">Utilisateur courant: {{$user->name}}</h6>
                </div>
                    <p class="card-text">
                    {{ Form::open(['route' => ['tickets.update',$ticket->id], 'method' => 'PATCH']) }}

                    <div class="form-group">
                        {{ Form::label('objet', 'Titre du ticket') }}
                        {{ Form::text('objet', $ticket->objet, ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('status', 'Statut') }}
                        {{ Form::text('status', $ticket->status,['class' => 'form-control
                        form-control-sm','readonly']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('priority', 'Priorité') }}
                        {{ Form::text('priority', $ticket->priority,['class' => 'form-control
                        form-control-sm','readonly']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('type', 'Type') }}
                        {{ Form::text('type', $ticket->type,['class' => 'form-control
                        form-control-sm', 'readonly']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('category_id', 'Catégorie') }}
                        {{ Form::text(null, $ticket->category->name,['class' => 'form-control
                        form-control-sm','readonly']) }}
                        {{ Form::text('category_id', $ticket->category->id,['class' => 'form-control
                        form-control-sm','readonly','hidden']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', 'Description du problème') }}
                        {{ Form::textarea('description', $ticket->description, ['class' => 'form-control', 'rows' => '5'])}}
                    </div>
                    <div class="d-flex justify-content-md-center mt-4 row">
                        <a href="{{route('tickets.index')}}"class="btn col-5 py-4 mr-4 btn-danger">Annuler</a>

                        {{ Form::submit('Soumettre', ['class' => 'btn col-5 py-4 ml-4 btn-primary']) }}
                    </div>
                    {{ Form::close() }}
                </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



