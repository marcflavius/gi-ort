@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row align-self-stretch justify-content-md-center">
			<div class="col-md-12 my-3">
				<div class="bg-light px-5 py-4">
				</div>
			</div>
		</div>
		<div class="row align-self-stretch justify-content-md-center">
			<div class="right-col col col-md-6 my-4">
				<div class="p-5 bg-light">
					<span class="user-field">Nom:
					</span><br>
					<span class="user-field">email:
					</span><br>
					<span class="user-field">Mot de passe:
					</span><br><br>
					<hr>
					{{--<a class="btn btn-block btn-primary" data-toggle="modal" data-target="#deleteConfirmationModal">Delete</a>--}}
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
			     aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
@endSection