<head>

  <link rel="stylesheet" href="css/Reservar.css" />

</head>

<title>Reservaciones</title>
<?php include 'include/templates/header.php'; ?>


<body>
  <!-- Tarjetas de reservación 1-->
  <div class="container mt-5 mb-3">
    <div class="row">
      <div class="col-md-4">
        <div class="card p-3 mb-2">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
              <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
              <div class="ms-2 c-details">
                <h6 class="mb-0">Sede Heredia</h6> <span>Waze: Utopía Beauty Salón Heredia</span>
              </div>
            </div>
            <div class="badge"> <span>Design</span> </div>
          </div>
          <div class="mt-5">
            <div class="container">
              <div class="row">
                <div id="TitulosCartas" class="col-md-8">
                  <h3>Brandon Smith</h3>
                  <h5>Gerente General</h5>
                </div>
                <div class="col-md-4">
                  <img src="img/Estilista4.jpg" alt="Imagen" class="img-fluid" style="width: 300px; height: auto;">
                </div>
              </div>
            </div>
            <div class="mt-5">
              <div id="ProgresoBarra1" class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
              <div class="mt-3"> <span class="text1">Gerente de Servicios - 10 años de experiencia </span> </div><br>
              <a title="Agendar una cita en el salón" class="btn btn-primary" href="php/index.php" role="button">Agendar Cita</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tarjetas de reservación 2-->
      <div class="col-md-4">
        <div class="card p-3 mb-2">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
              <div class="icon"> <i class="bx bxl-dribbble"></i> </div>
              <div class="ms-2 c-details">
                <h6 class="mb-0">Sede Alajuela</h6> <span>Waze: Utopía Beauty Salón Alajuela</span>
              </div>
            </div>
            <div class="badge"> <span>Product</span> </div>
          </div>
          <div class="mt-5">
            <div class="container">
              <div class="row">
                <div id="TitulosCartas" class="col-md-8">
                  <h3>Felipe Ramos</h3>
                  <h5>Administrador Sr</h5>
                </div>
                <div class="col-md-4">
                  <img src="img/Estilista3.jpg" alt="Imagen" class="img-fluid" style="width: 300px; height: auto;">
                </div>
              </div>
            </div>
            <div class="mt-5">
              <div id="ProgresoBarra2" class="progress">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
              <div class="mt-3"> <span class="text1">Estilista Profesional - 08 años de Experiencia Local</span> </div>
              <br>
              <a class="btn btn-primary" href="php/index.php" role="button">Agendar Cita</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tarjetas de reservación 3-->
      <div class="col-md-4">
        <div class="card p-3 mb-2">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
              <div class="icon"> <i class="bx bxl-reddit"></i> </div>
              <div class="ms-2 c-details">
                <h6 class="mb-0">Sede San José</h6> <span>Waze: Utopía Beauty Salón San José</span>
              </div>
            </div>
            <div class="badge"> <span>Design</span> </div>
          </div>
          <div class="mt-5">

            <div class="container">
              <div class="row">
                <div id="TitulosCartas" class="col-md-8">
                  <h3>Christian Rojas</h3>
                  <h5>Administrador Jr</h5>
                </div>
                <div class="col-md-4">
                  <img src="img/Estilista2.jpg" alt="Imagen" class="img-fluid" style="width: 300px; height: auto;">
                </div>
              </div>
            </div>

            <div class="mt-5">
              <div id="ProgresoBarra3" class="progress">
                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
              <div class="mt-3"> <span class="text1">Estilista Profesional - 03 años de Experiencia Local</span> </div>
              <br>
              <a class="btn btn-primary" href="php/index.php" role="button">Agendar Cita</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Tarjetas de reservación -->

  <!-- Servicios -->


  <center>
  <h1>Servicios</h1>
    <div id="carouselExampleAutoplaying" class="carousel slide w-50 text-align: center"" data-bs-ride=" carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Servicio1.jpeg" class="d-block w-100" alt="...">
          <h4 >Makeup</h4>
          <hr>

        </div>
        <div class="carousel-item">
          <img src="img/Servicio2.jpg" class="d-block w-100" alt="...">
          <h4 >Hairdressing</h4>
          <hr>

        </div>
        <div class="carousel-item">
          <img src="img/Servicio3.jpeg" class="d-block w-100" alt="...">
          <h4>Skin care</h4>
          <hr>

        </div>
      </div>
      <p>
        Descubre nuestra magia del maquillaje. Destacamos tu belleza con estilo y elegancia. Nuestros artistas del maquillaje te brindan un servicio excepcional, siguiendo las últimas tendencias. Resalta tus rasgos únicos y siéntete radiante en cualquier ocasión. ¡Déjanos realzar tu esencia!
      </p>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</center>

  <!-- </div> -->


  <!-- Agregamos Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
  </script>
</body>


<!-- Empieza Footer -->
<!-- Footer -->
<footer id="Footer" class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="ShoppingCart.html" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



</html>