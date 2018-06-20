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
        <div class="left-col col-md-3 my-4">
            <div class="bo-menu p-0 bg-light">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-4">Gestion des Catégories</li>
                    <li class="list-group-item py-4">Gestion des Utilisateurs</li>
                    <li class="list-group-item py-4">Gestion des Tickets</li>
                </ul>
            </div>
        </div>
        <!-- Right Panel : Ticket displaying here-->
        <div class="right-col col col-md-9 my-4">
            <div class="p-5 bg-light">
                <form>
                    <div class="form-group">
                        <label for="group">Groupe</label>
                        <select class="form-control  form-control-sm" id="group">
                            <option>Toutes les catégories</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Nom : </label>
                        <input type="text" class="form-control" id="lastname" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="firstname">Prénom : </label>
                        <input type="text" class="form-control" id="firstname" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="identifiant">Identifiant : </label>
                        <input type="text" class="form-control" id="identifiant" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe : </label>
                        <input type="password" class="form-control" id="password" placeholder="">
                    </div>
                    <a class="btn w-25 btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Save</a>
                    <a class="btn w-25 btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cancel</a>
                </form>
            </div>
        </div>
    </div>

</div>
@endSection