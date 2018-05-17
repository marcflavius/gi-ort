@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-12 login-banner bg-light  p-5">
            <h1>Bienvenue, connectez vous !</h1>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <div class="login-form px-5 my-5">
                <div class="card" style="">
                    <div class="card-body py-0">
                        <p class="card-text">
                        <form>
                            <br>
                            <div class="form-group">
                                <label for="user">Utilisateur</label>
                                <input type="email" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Entrez votre identifiant">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de Passe</label>
                                <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                            </div>
                            <a type="submit" class="btn btn-block my-3">Connexion</a>
                        </form>
                        <small class="text-danger">Vous avez perdu vos identifiants? Contactez votre administrateur.</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



