<nav class="navbar navbar-expand-lg navbar-dark primary-c-bg py-4">
    <a class="navbar-brand" href="#">Systême de gestion de tickets</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('tickets.index')}}">Liste des tickets<span class="sr-only">(current)</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{route('tickets.create')}}">Créer un ticket</a>
            </li>
            @include('assets.menu_admin')
            @auth
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="POST">
                        {{csrf_field()}}
                        <button class="btn btn-danger" type="submit">Déconnexion</button>
                    </form>

                </li>
            @endauth
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Connexion</a>
                </li>
            @endguest
           
        </ul>
    </div>
</nav>