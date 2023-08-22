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
<?php
  include('include/templates/footer.php');
?>
<!-- Footer -->



</html>