<nav class="navbar navbar-default navbar-fixed-top navbar-expand-lg navbar-dark primary-c-bg py-4">
    
    <a class="navbar-brand" href="/">
        <h3 class="my-0">
            <i class="fas fa-eye"></i> &nbsp;
            Gestion des incidents
        </h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item px-2">
                <a class="nav-link" href="{{route('tickets.index')}}">
                    <i class="far fa-list-alt"></i>
                    Liste des tickets<span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item px-2">
                <a class="nav-link" href="{{route('tickets.create')}}">
                    <i class="far fa-plus-square"></i>
                    Créer un ticket
                </a>
            </li>
            @include('assets.menu_admin')
            @auth
                <li class="nav-item px-2">
                    <form action="{{route('logout')}}" method="POST">
                        {{csrf_field()}}
                        <button class="btn btn-danger" type="submit"><i class="fas fa-sign-out-alt"></i> | Déconnexion</button>
                    </form>
                </li>
            @endauth
            @guest
                <li class="nav-item px-2">
                    <button class="btn btn-primary" href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> | Connexion</button>
                </li>
            @endguest
        </ul>
    </div>
</nav>