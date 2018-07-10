@auth
	@if(auth()->user()->isAdmin() or auth()->user()->isTech())
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
		   aria-haspopup="true" aria-expanded="false">
		   <i class="fas fa-toolbox"></i>
			Administration
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

			<a class="dropdown-item" href="{{route('admin.tickets.index')}}"> Tickets </a>

			@if(auth()->user()->isAdmin())

				<a class="dropdown-item" href="{{route('admin.categories.index')}}"> Catégories </a>

				<a class="dropdown-item" href="{{route('admin.users.index')}}"> Utilisateurs </a>

			@endif


		</div>
	</li>
	@endif
@endauth