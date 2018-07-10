<!-- Modal -->
<div class="modal fade"
     id="deleteConfirmationModal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
				<div class="modal-dialog"
                     role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"
                                id="exampleModalLabel">Voulez-vous vraiment supprimer ce ticket ?</h5>
							<button type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
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
		<a href="{{route('admin.tickets.index')}}"
		   class="btn col-6  btn-warning"
		   data-dismiss="modal"
		   type="submit"
		   value="Annuler"
		>Annuler</a>

	</div>
{{ Form::close()}}
   @endif
@endauth
</div>
</div>
</div>
</div>

@section('js')
    <script>
		$('.delete-me').on('click', function () {
            deleteMe = $(this).attr('data-id');
            $('#delete-me').attr('action', window.location.href + '/' + deleteMe);
        })

	</script>
@endsection