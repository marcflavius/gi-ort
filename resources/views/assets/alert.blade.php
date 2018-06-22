@if(session()->has('success'))
	<div class="alert-message alert alert-success text-center  position-fixed message-float pr-4" role="alert">
		<span>{{session('success')}}</span>

		<button type="button" class="close " aria-label="Close">
			<span aria-hidden="true" class="message-float__close">
				<span class="scale06">&times;</span>
			</span>
		</button>
	</div>

@endif