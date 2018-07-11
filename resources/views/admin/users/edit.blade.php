@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row align-self-stretch justify-content-md-center">
			<div class="col-md-12 my-3">
				<div class="bg-light px-5 py-4">
                <h2>Edition l'utilisateur: </h2><small> {{$user->name}}</small>
				</div>
			</div>
		</div>
		<div class="row align-self-stretch justify-content-md-center">
			<div class="right-col col col-md-6 my-4">
				<div class="p-5 bg-light">
					{{ Form::open(['route' => ['admin.users.update', $user->id], 'method' => 'PATCH']) }}

					<div class="form-group">
                        {{ Form::label('name', 'Nom de l\'utilisateur') }}
						{{ Form::text('name', $user->name, ['class' => 'form-control'])}}
                    </div>

					<div class="form-group">

					</div>

                    <div class="form-group">
                        {{ Form::label('email', 'Email de l\'utilisateur') }}
						{{ Form::text('email', $user->email, ['class' => 'form-control', 'rows' =>
						'5']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('role', 'Rôle de l\'utilisateur') }}
						{{ Form::select('role',$roles ,$user->roles->first()->role_name, ['class' => 'form-control',
						]) }}
                    </div>

                    <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label
                            text-md-right">Confirmer mot de passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                    <a href="{{route('admin.users.index')}}" class="btn btn-block btn-primary">Annuler</a>
					{{ Form::submit('Soumettre', ['class' => 'btn btn-block btn-submit btn-primary']) }}
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@endSection