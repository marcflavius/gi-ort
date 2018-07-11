@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row align-se['route' => ['admin.categories.store']lf-stretch justify-content-md-center">
        <div class="col-md-7 d-flex justify-content-around">
            <div class="card my-5">
                <div class="card-body">
                    @include('assets.errors')
                    <div class="custom-card-header">
                        <h3 class="card-title">Créer un ticket:</h3>
                        <hr>
                        <h6 class="card-subtitle mb-2 text-muted">Utilisateur courant: <?= $user->name ?></h6>
                    </div>
                    <p class="card-text">
                        {{ Form::open(['route' => ['tickets.store'], 'method' => 'POST']) }}

                        <div class="form-group">
                            {{ Form::label('objet', 'Titre du ticket') }}
                            {{ Form::text('objet', '', ['class' => 'form-control'])}}
                        </div>

                        <div class="form-group">
                            {{ Form::label('type', 'Type') }}
                            {{ Form::select('type', ['demande' => 'demande','incide' => 'incident'], '',['class' => 'form-control form-control-sm'])}}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('priority', 'Priorité') }}
                            {{ Form::select('priority', $priorityArray, '',['class' => 'form-control form-control-sm']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('status', 'Status') }}
                            {{ Form::select('status', $statusArray,'',['class' => 'form-control form-control-sm']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('category_id', 'Catégorie') }}
                            {{ Form::select('category_id', $categoryIdArray, '',['class' => 'form-control form-control-sm']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('description', 'Description du problème') }}
                            {{ Form::textarea('description','', ['class' => 'form-control', 'rows' => '5'])}}
                        </div>


                        <div class="d-flex justify-content-md-center mt-4 row">
                            <a href="{{route('tickets.index')}}" class="btn col-5 py-4 mr-4 btn-danger">Annuler</a>
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



