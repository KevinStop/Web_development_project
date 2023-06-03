<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('Titulo Pagina')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">Biblioteca</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('libros') }}">Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('usuarios') }}">Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('prestamos') }}">Prestamos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>      
    <div class="container">
      @yield('contenido')
    </div>
    <footer class="footer bg-dark text-white">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h5>Síguenos en redes sociales</h5>
              <ul class="list-unstyled list-inline social-icons">
                <li class="list-inline-item">
                  <a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center">
              <p>&copy; 2023 Desarrollo web para la integración. Todos los derechos reservados.</p>
            </div>
          </div>
        </div>
      </footer>      
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>