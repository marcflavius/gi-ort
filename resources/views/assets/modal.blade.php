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
                                id="exampleModalLabel">Modal title</h5>
							<button type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						@include('assets.delete-button')
					</div>
				</div>
</div>

@section('js')
	<script>
		$('.delete-me').on('click', function () {
            deleteMe = $(this).attr('data-id');
            $('#delete-me').attr('action',window.location.href +'/'+deleteMe);
        })

	</script>
@endsection