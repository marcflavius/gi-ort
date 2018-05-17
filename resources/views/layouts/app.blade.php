<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
  </head>


  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary py-4">
      <a class="navbar-brand" href="#">Systême de gestion de tickets</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="listing_tickets.php">Accueil<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edit_ticket.php">Créer un ticket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Connexion</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Admin Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">ADMIN listing</a>
              <a class="dropdown-item" href="#">ADMIN edit cat</a>
              <a class="dropdown-item" href="#">ADMIN edit user</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    @yield('content')

    <footer class="footer text-white ">
      <div class="row bg-custom-primary">
        <div class="col-md-3">
        <h6>Solution mise en place par: </h6>
          <ul class="collaborators">
            <li>Fitoussi Jonathan</li>
            <li>Flavius Marc</li>
            <li>Fontaine Vincent</li>
            <li>Garcia Dylan</li>
            <li>Pellegrino Lucas</li>
            <li>Valentin Paul</li>
          </ul>
        </div>
        <div class="col-md-3">b</div>
        <div class="col-md-3">c</div>
        <div class="col-md-3">
          <h6>Contact:</h6>
          <ul>
            <li>
              <address>
                14 Rue Etienne Collongues, <br>
                31770 Colomiers <br>
              </address>
            </li>
          </ul>
        </div>
      </div>


    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>