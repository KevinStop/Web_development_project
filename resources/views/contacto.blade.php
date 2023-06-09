@extends('layouts.index')

@section('Titulo Pagina', 'Contacto')

@section('contenido')

    <body>

        <style>
            .jumbotron {
              background-image: url('https://asomifecuador.com/wp-content/uploads/2019/01/contacto.jpg');
              background-size: cover;
              background-position: center;
              color: #fff;
              text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
            }

            .card {
              border: none;
              border-radius: 0;
              box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            }

            .social-icons {
              list-style: none;
              padding: 0;
              display: flex;
              justify-content: center;
              margin-bottom: 1rem;
            }

            .social-icons li {
              margin-right: 1rem;
            }

            .social-icons a {
              color: #000;
              font-size: 1.5rem;
              transition: color 0.3s ease;
            }

            .social-icons a:hover {
              color: #007bff;
            }

            .btn-animated {
              position: relative;
              overflow: hidden;
              transition: all 0.3s ease;
            }

            .btn-animated span {
              position: relative;
              z-index: 1;
            }

            .btn-animated::before {
              content: '';
              position: absolute;
              height: 100%;
              width: 100%;
              top: 0;
              left: 0;
              background-color: rgba(0, 0, 0, 0.2);
              transform: scaleX(0);
              transform-origin: right;
              transition: transform 0.3s ease;
            }

            .btn-animated:hover::before {
              transform: scaleX(1);
              transform-origin: left;
            }
            img{
              max-height: 250px;
            }
          </style>
  <!-- Encabezado con imagen de fondo -->

    <div class="text-center mt-3 mb2">
        <h1>Contacto</h1>
    </div>
  <!-- Contenido principal -->
  <div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-6 col-md-5">
        <div class="card">
          <img src="https://lh3.googleusercontent.com/3N88O1lN_R-vqnP1sdfpobJzJeaGBRnUyo0AyFDEfLF5ThcoC4sP_DwoG0Ph7EmdLHaTN5ZYjYZ8pgzxwFp_dqQZBZXqcaHYTH12eEgju9BV5Q4j5T4a5fpKW9Pg4_qfhFnaUeahvMB8JwS4eninuT6R9XfY2F6tQDhZGLu3OCRYJcIe-8_d6iRf1C8-vWcILusurQFByGrtTpNJ0G6G_3jFZWpMyyWDtt0djuUwQAp7NxowyywTwcUXgo0lkuRIps0z_SBIpJX356ZltEbbY-g7E2FTC3ryjJsLki_fEYJN6z2tE9YxUmsbcorkg0WNcXpPUGTtiYckaghNm74nrtsSPLKhSUmHPf66ZL7F19G7hTF6HKIBgZfzwRcDsk9ABnc-CBqPjc5SqnuwxyDWla02M2NTDBWCAPv7ctR8C-PnO4I1btfZ-ffhw0zd7hC5vuRMmajH_90NNxvaG5gjGKcEXQJxS8jkBNcw_LUJenY9avvMm7-2X0jIrSKVCJ0lQ2x3Xk4aEBtNqBZIDVukEqNWD8Ctg33SF0Hjya8f4983mupjv61EgQZ7uhxfy1NAmmGBwedT1LCuE6-JS6dWAer0YtJ3FaIf-Swr3TpInqu43YNRydoAL2Y_ZWV4mlQFiHGCylTq8DUOXjh7j8Iyep3fPWrzkj-nLIV-kdaINks8gUbQRPFEITLjNPNQRNNq05BQGWciWTix0shgaqEAQg5BjVuhx3wFtBWOYdkEfcDqtMqEqKqGauemysMUbzLZpGjFPyGwAq-FaajyCLutQGvBzjoWAI95HgWdlkdt67cIQHKk98IhoIg2RP7BN--iX17GYHZccqyQVKB83BXNu0dRp9onT4P26M_fX4IG1o7z0Y_bSy3VzPbUpp8k60O3fdRj_O0NQfkJf-2aup4avY4r6jxQbfgFZLHVoumlR-e8TnWpq97pjvB9dWy3AxMUFg2bARNqXgISTgliq3U=w899-h660-s-no?authuser=1" class="card-img-top" alt="Imagen de contacto">
          <div class="card-body">
            <h5 class="card-title">Información de Contacto</h5>
            <ul class="list-group">
              <li class="list-group-item"><i class="fas fa-phone"></i> Teléfono: 0963148209</li>
              <li class="list-group-item"><i class="fas fa-envelope"></i> Email: ovavellan@espe.edu.ec</li>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Dirección: Av. Tsáchila, Guayaqul, Santo Domingo, Ecuador</li>
            </ul>
            <ul class="social-icons text-center">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <div class="text-center">
                <a href="#" class="btn btn-primary btn-block btn-animated">
                    <span>Contactar</span>
                  </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-5">
        <div class="card">
          <img src="https://img.freepik.com/fotos-premium/pongase-contacto-nosotros-mano-empresario-sosteniendo-telefono-inteligente-movil-icono-correo-telefono-correo-electronico_52701-38.jpg" class="card-img-top" alt="Imagen de contacto">
          <div class="card-body">
            <h5 class="card-title">Información de Contacto</h5>
            <ul class="list-group">
              <li class="list-group-item"><i class="fas fa-phone"></i> Teléfono: 0998201714</li>
              <li class="list-group-item"><i class="fas fa-envelope"></i> Email: degranda1@espe.edu.ec</li>
              <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Dirección: Calle Principal, Santo Domingo, Ecuador</li>
            </ul>
            <ul class="social-icons">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <div class="text-center">
                <a href="#" class="btn btn-primary btn-block btn-animated">
                    <span>Contactar</span>
                  </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center mb-3">
        <div class="col-6 col-md-5">
          <div class="card">
            <img src="https://tork.news/__export/1657770808238/sites/tork/img/2022/07/14/screenshot_20220714-005004_instagram_x1x.jpg_1753094345.jpg" class="card-img-top" alt="Imagen de contacto">
            <div class="card-body">
              <h5 class="card-title">Información de Contacto</h5>
              <ul class="list-group">
                <li class="list-group-item"><i class="fas fa-phone"></i> Teléfono: 0986253556</li>
                <li class="list-group-item"><i class="fas fa-envelope"></i> Email: sastopper@espe.edu.ec</li>
                <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Dirección: Calle Principal, Santo Domingo, Ecuado</li>
              </ul>
              <ul class="social-icons text-center">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
              <div class="text-center">
                  <a href="#" class="btn btn-primary btn-block btn-animated">
                      <span>Contactar</span>
                    </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-5">
          <div class="card">
            <img src="https://pps.whatsapp.net/v/t61.24694-24/264493385_628210945129001_210078889738383951_n.jpg?ccb=11-4&oh=01_AdRGcUQN9OcZFsR9UM3Vj02J1PYZdJBVhlEHVd1yWzrWtw&oe=648E54E6" class="card-img-top" alt="Imagen de contacto">
            <div class="card-body">
              <h5 class="card-title">Información de Contacto</h5>
              <ul class="list-group">
                <li class="list-group-item"><i class="fas fa-phone"></i> Teléfono: 0998556475</li>
                <li class="list-group-item"><i class="fas fa-envelope"></i> Email: kastopper@espe.edu.ec</li>
                <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Dirección: Calle Principal, Santo Domingo, Ecuado</li>
              </ul>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
              <div class="text-center">
                  <a href="#" class="btn btn-primary btn-block btn-animated">
                      <span>Contactar</span>
                    </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Enlace a Font Awesome para los íconos -->
  <script src="https://kit.fontawesome.com/xxxxxxxxxx.js" crossorigin="anonymous"></script>
  <!-- Script de Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
@endsection
