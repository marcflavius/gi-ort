{{--{{dd(auth()->user()->roles)}}--}}
{{--{{dd(\Auth::check())}}--}}

		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Admin Menu
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="{{route('admin.tickets.index')}}"> Tickets </a>
				<a class="dropdown-item" href="{{route('admin.users.index')}}"> Utilisateurs </a>
				<a class="dropdown-item" href="{{route('admin.categories.index')}}"> Catégories </a>
			</div>
		</li>
