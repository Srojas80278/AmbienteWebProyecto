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
<?php
  include('include/templates/footer.php');
?>
<!-- Footer -->



</html>