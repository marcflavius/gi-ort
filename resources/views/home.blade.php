@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        <div class="login-form">
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
            <a type="submit" class="btn btn-block btn-danger">Submit</a>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection



