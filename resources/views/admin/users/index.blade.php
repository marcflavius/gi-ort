@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row align-self-stretch justify-content-md-center">
			<div class="col-md-12 my-3">
				<div class="bg-light px-5 py-4">
					<div class="row">
						<div class="col-8">
							<h2>Gestion des utilisateurs: </h2><small>Crééz, mettez à jour ou supprimez des utilisateurs</small>
						</div>
						<div class=" col-1 ml-auto">
							<a class="px-2 btn btn-danger align-middle" href="{{route('admin.users.create')}}"> Créer un Utilisateur</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row align-self-stretch justify-content-md-center">
			<div class="left-col col-md-3 my-4">
				<div class="bo-menu p-0 bg-light">
					<ul class="list-group list-group-flush">
					<li class="list-group-item py-4"><a href="{{route('admin.categories.index')}}">Gestion des Catégories</a></li>
						<li class="list-group-item py-4"><a href="{{route('admin.users.index')}}">Gestion des Utilisateurs</a></li>
						<li class="list-group-item py-4"><a href="{{route('admin.tickets.index')}}">Gestion des Tickets</a></li>
					</ul>
				</div>
			</div>
			<!-- Right Panel : Ticket displaying here-->
			<div class="right-col col col-md-9 my-4">
				<div class="p-0 bg-light">
					<table class="table table-striped">
						<thead>
						<tr>
							<th scope="col">Titre du ticket</th>
							<th scope="col">Catégorie</th>
							<th scope="col">Ouvert par</th>
							<th scope="col">Priorité</th>
							<th scope="col">Statut</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td style="width: 60%">
                    <span>Titre du ticket :
                      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pretium eros.
                      In vitae pretium eros. Fusce ut purus vitae lectus tincidunt facilisis ac sit.</small>
                    </span>
							</td>
							<td>Lorem Ipsum</td>
							<td>Lorem Ipsum</td>
							<td>1</td>
							<td>Ouvert</td>
						</tr>
						<tr>
							<td style="width: 60%">
                    <span>Titre du ticket :
                      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pretium eros.
                      In vitae pretium eros. Fusce ut purus vitae lectus tincidunt facilisis ac sit.</small>
                    </span>
							</td>
							<td>Lorem Ipsum</td>
							<td>Lorem Ipsum</td>
							<td>1</td>
							<td>Ouvert</td>
						</tr>
						<tr>
							<td style="width: 60%">
                    <span>Titre du ticket :
                      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pretium eros.
                      In vitae pretium eros. Fusce ut purus vitae lectus tincidunt facilisis ac sit.</small>
                    </span>
							</td>
							<td>Lorem Ipsum</td>
							<td>Lorem Ipsum</td>
							<td>1</td>
							<td>Ouvert</td>
						</tr>
						<tr>
							<td style="width: 60%">
                    <span>Titre du ticket :
                      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pretium eros.
                      In vitae pretium eros. Fusce ut purus vitae lectus tincidunt facilisis ac sit.</small>
                    </span>
							</td>
							<td>Lorem Ipsum</td>
							<td>Lorem Ipsum</td>
							<td>1</td>
							<td>Ouvert</td>
						</tr>
						<tr>
							<td style="width: 60%">
                    <span>Titre du ticket :
                      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pretium eros.
                      In vitae pretium eros. Fusce ut purus vitae lectus tincidunt facilisis ac sit.</small>
                    </span>
							</td>
							<td>Lorem Ipsum</td>
							<td>Lorem Ipsum</td>
							<td>1</td>
							<td>Ouvert</td>
						</tr>
						<tr>
							<td style="width: 60%">
                    <span>Titre du ticket :
                      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pretium eros.
                      In vitae pretium eros. Fusce ut purus vitae lectus tincidunt facilisis ac sit.</small>
                    </span>
							</td>
							<td>Lorem Ipsum</td>
							<td>Lorem Ipsum</td>
							<td>1</td>
							<td>Ouvert</td>
						</tr>
						<tr>
							<td style="width: 60%">
                    <span>Titre du ticket :
                      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pretium eros.
                      In vitae pretium eros. Fusce ut purus vitae lectus tincidunt facilisis ac sit.</small>
                    </span>
							</td>
							<td>Lorem Ipsum</td>
							<td>Lorem Ipsum</td>
							<td>1</td>
							<td>Ouvert</td>
						</tr>
						<tr>
							<td style="width: 60%">
                    <span>Titre du ticket :
                      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pretium eros.
                      In vitae pretium eros. Fusce ut purus vitae lectus tincidunt facilisis ac sit.</small>
                    </span>
							</td>
							<td>Lorem Ipsum</td>
							<td>Lorem Ipsum</td>
							<td>1</td>
							<td>Ouvert</td>
						</tr>
						<tr>
							<td style="width: 60%">
                    <span>Titre du ticket :
                      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pretium eros.
                      In vitae pretium eros. Fusce ut purus vitae lectus tincidunt facilisis ac sit.</small>
                    </span>
							</td>
							<td>Lorem Ipsum</td>
							<td>Lorem Ipsum</td>
							<td>1</td>
							<td>Ouvert</td>
						</tr>
						<tr>
							<td style="width: 60%">
                    <span>Titre du ticket :
                      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pretium eros.
                      In vitae pretium eros. Fusce ut purus vitae lectus tincidunt facilisis ac sit.</small>
                    </span>
							</td>
							<td>Lorem Ipsum</td>
							<td>Lorem Ipsum</td>
							<td>1</td>
							<td>Ouvert</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endSection