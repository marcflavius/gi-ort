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

				@include('assets.errors')
				<div class="p-5 bg-light">
					{{ Form::open(['route' => ['admin.users.store']]) }}

					<div class="form-group">
						{{ Form::label('name', 'Nom de l\'utilisateur') }}
						{{ Form::text('name', "", ['class' => 'form-control'])}}
					</div>

					<div class="form-group">
						{{ Form::label('email', 'Email') }}
						{{ Form::email('email', "", ['class' => 'form-control', 'rows' => '5']) }}
					</div>

					<div class="form-group">
						{{ Form::label('role', 'Rôle') }}
						{{ Form::select('role', $roles, ['class' => 'form-control', 'rows' => '5']) }}
					</div>


					<div class="form-group row">
						<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

						<div class="col-md-6">
							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

							@if ($errors->has('password'))
								<span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
							@endif
						</div>
					</div>

					<div class="form-group row">
						<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer votre mot de passe') }}</label>

						<div class="col-md-6">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						</div>
					</div>

					<a class="btn btn-block btn-primary">Annuler</a>
					{{ Form::submit('Soumettre', ['class' => 'btn btn-block btn-submit btn-primary']) }}
					{{ Form::close() }}
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