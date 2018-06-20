@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row align-self-stretch justify-content-md-center">
            <div class="col-md-12 my-3">
                <div class="bg-light px-5 py-4">
                    <h2>Edition du ticket: </h2><small>"Titre du ticket"</small>
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
                            <label for="title">Titre du ticket : </label>
                            <input type="text" class="form-control" id="title" placeholder="">
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
                                <option>Toute les catégories</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label><br>
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                eu tincidunt enim, sit amet varius diam. Sed non eros tellus. Proin faucibus eu nisi a maximus.</small>
                            <textarea class="form-control" id="description" rows="5"></textarea>
                        </div>
                        <a class="btn w-25 btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Save</a>
                        <a class="btn w-25 btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endSection
