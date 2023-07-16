<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>@yield('title', 'Finance Application')</title>
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: lightgray;
            color: black;
            text-align: center;
            padding: 10px 0;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">FinanceApp</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/') }}"><ion-icon name="home-outline"></ion-icon> Inicio</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/moneyins') }}"> <ion-icon name="enter-outline"></ion-icon> Ingresos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/moneyouts') }}"> <ion-icon name="exit-outline"></ion-icon> Egresos</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/categories') }}"><ion-icon name="layers-outline"></ion-icon> Categorías</a>
              </li>
              

          </ul>
      </div>
  </nav>

  <div class="container">
      @yield('content')
  </div>

  <footer class="footer bg-light">
        <div class="container">
            <p class="text-muted text-center">&copy; 2023 FinanceApp. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>