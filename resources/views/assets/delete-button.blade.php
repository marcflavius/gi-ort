<div class="modal-body p-4">
@auth
        @if(auth()->user()->isAdmin())
            {{ Form::open([
                    'route' => ['admin.tickets.destroy',null],
                    'method' => 'DELETE',
                    'id' => 'delete-me',
                    ])
            }}
            <div class="d-flex row">

				<input class="btn col-6 btn-primary"
                       type="submit"
                       value="Supprimer"
                />
				<a href="{{route('admin.tickets.index')}}" class="btn col-6  btn-warning"
                   data-dismiss="modal"
                       type="submit"
                       value="Annuler"
                >Annuler</a>

			</div>
            {{ Form::close()}}
        @endif
    @endauth
</div>