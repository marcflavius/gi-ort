@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="row align-self-stretch justify-content-md-center">
        <div class="col-md-7 d-flex justify-content-around">
            <div class="card" style="">
                <div class="card-body">
        @include('assets.errors')
                <h3 class="card-title">Créer un ticket:</h3>
                <h6 class="card-subtitle mb-2 text-muted">Utilisateur courant: <?= $user->name ?></h6>
                <p class="card-text">
                    {{ Form::open(['route' => ['tickets.store'], 'method' => 'POST']) }}

                    <div class="form-group">
                        {{ Form::label('objet', 'Titre du ticket') }}
                        {{ Form::text('objet', '', ['class' => 'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{ Form::label('type', 'Type') }}
                        {{ Form::select('type', ['demande' => 'demande','incide' => 'incident'], ['class' => 'form-control'])}}
                    </div>
                    
                    <div class="form-group">
                        {{ Form::label('priority', 'Priorité') }}
                        {{ Form::select('priority', $priorityArray, '',['class' => 'form-control form-control-sm']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('category_id', 'Catégorie') }}
                        {{ Form::select('category_id', $categoryIdArray, '',['class' => 'form-control form-control-sm']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', 'Description du problème') }}
                        {{ Form::textarea('description','', ['class' => 'form-control', 'rows' => '5'])}}
                    </div>


                    <a href="{{route('tickets.index')}}" class="btn btn-block btn-primary">Annuler</a>
                    

                    {{ Form::submit('Soumettre', ['class' => 'btn btn-block btn-submit btn-primary']) }}
                    {{ Form::close() }}

                </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



