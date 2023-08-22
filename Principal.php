<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principal</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/principal1.css" />

</head>

<body>

  <?php include 'include/templates/header.php'; ?>

  <!-- Main-->
  <br>

  <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
    <a class="navbar-brand" href=""></a>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="#scrollspyHeading1">Nuestros Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#scrollspyHeading2">Nosotros</a>
      </li>

    </ul>
  </nav>
  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
    data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
    <h4 id="scrollspyHeading1"></h4>
    <p>

    <div class="container text-center">
      <h1>Nuestros Productos</h1>

      <?php
      require 'DAL/conexion.php';

      $conexion = Conecta();
      $query = "SELECT id_producto, nombre, descripcion, img, precio FROM productos";
      $result = mysqli_query($conexion, $query);


      if (mysqli_num_rows($result) > 0) {

        while ($fila = mysqli_fetch_assoc($result)) {

          echo '<div class="container text-center">';

          echo '<div  class="row">';
          echo '<div   class="col">';
          echo '<div class="card" style="width: 40rem;>';
          echo '<div class="producto-details">';
          echo '<img src="' . $fila['img'] . '" alt="' . $fila['nombre'] . '">';
          echo '<h2>' . $fila['nombre'] . '</h2>';
          echo '<p>' . $fila['descripcion'] . '</p>';
          echo '<p>Precio: $' . $fila['precio'] . '</p>';

          echo '<form action="php/Carrito/agregarItem.php" method="post">';
          echo '<input type="hidden" name="product_id" value="' . $fila['id_producto'] . '">';
          echo '<input type="number" name="quantity" value="1">';
          echo '<input type="hidden" name="price" value="' . $fila['precio'] . '">';
          echo '<button type="submit" class="btn btn-primary">Agregar al Carrito</button>';

          echo '</form>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';

          echo '<br>';

        }

      } else {
        echo '<p>Compra tu primer producto en la tienda.</p>';
      }

      ?>
    </div>




  </div>
  </p>

  <h4 id="scrollspyHeading2"></h4>
  <p>
    <!--
      -->
  <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
    <a class="navbar-brand" href=""></a>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="#scrollspyHeading1">Nuestros Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#scrollspyHeading2">Nosotros</a>
      </li>


    </ul>
  </nav>

  <!--
      -->

  <br>

  <br>
  <div class="container text-center">
    <h2 class="">Encuentranos en:</h2>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.3959514692547!2d-84.07062492524774!3d9.900942590199444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e34c171c793b%3A0xd93f42824d46b852!2zVXRvcMOtYSBCZWF1dHkgU2Fsw7Nu!5e0!3m2!1ses-419!2scr!4v1690477841853!5m2!1ses-419!2scr"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
  <div class="container text-center">

    <div class="card">
      <h5 class="card-header"></h5>
      <div class="card-body">
        <h5 class="card-title">Nuestra misión</h5>
        <p class="card-text">
          El objetivo fundamental de la Utopía Beauty Salón es ofrecer productos de alta calidad, así como asesorías
          para que los clientes lleven consigo el producto más adecuado, de acuerdo a sus necesidades e intereses.
          Además, Utopía Beauty Salón
          cuenta con un sistema de afiliación exclusivo para profesionales en el campo de la belleza, brindándoles así
          beneficios especiales, convirtiéndose en una especie de “mano derecha” entre estilistas, manicuristas y
          esteticistas, de acuerdo a una encuesta realizada recientemente.

          Ven a experimentar un día de bienestar y cuidado personal en nuestro salón.
          Te esperamos. Utopía Beauty Salón te ofrece servicios de cuidado capilar, uñas y estética,
          todo en un mismo lugar.
        </p>
        <a href="Reservar.php" class="btn btn-primary">Agenda nuestros servicios</a>
      </div>
    </div>



    </p>

  </div>











  </div>


  <!---->




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
            <a href="#!" class="text-reset">Angular</a>
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