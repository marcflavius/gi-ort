<div class="modal-body">
@auth
        @if(auth()->user()->isAdmin())
            {{ Form::open([
                    'route' => ['admin.tickets.destroy',$ticket->id],
                    'method' => 'DELETE'
                    ])
            }}
            <div class="d-flex row">

				<a class="btn col-6 btn-primary"
				   href="{{route('admin.tickets.destroy', ['ticket' => $ticket])}}"
				   role="button">Delete</a>
				<a class="btn col-6  btn-warning"
				   href="{{route('admin.tickets.index', ['ticket' => $ticket])}}"
				   role="button">Annuler</a>

			</div>
            {{ Form::close()}}
        @endif
@endauth
</div>