@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if($errors->any())
        @foreach($errors->getMessages() as $this_error)
            <p style="color: red;">{{$this_error[0]}}</p>
        @endforeach
    @endif
    <div class="row align-self-stretch justify-content-md-center">
        <div class="col-md-7 my-5">
            <div class="card" style="">
                <div class="card-body">
                <h3 class="card-title">Créer un ticket:</h3>
                <h6 class="card-subtitle mb-2 text-muted">Utilisateur courant: Nom Prénom</h6>
                <p class="card-text">
                <form action="{{action('TicketsController@edit', $ticket->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="objet">Titre du ticket : </label>
                        <input type="text" class="form-control" id="objet" value="{{$ticket->objet}}" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="priority">Priorité : </label>
                        <select class="form-control form-control-sm" id="priority">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="category">Catégorie : </label>
                    <select class="form-control form-control-sm" id="category">

                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                @if($category->id == $ticket->category->id)
                                selected
                                @endif
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label><br>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        eu tincidunt enim, sit amet varius diam. Sed non eros tellus. Proin faucibus eu nisi a maximus.</small>
                        <textarea class="form-control" id="description" rows="5">{{$ticket->description}}</textarea>
                    </div>
                </form>
                </p>
                <br>
                <a class="btn btn-block btn-primary" type="submit" href="{{route('tickets.update', $ticket->id)}}">Save</a>
                <a class="btn btn-block btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



