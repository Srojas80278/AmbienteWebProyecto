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
  <h1 class="">Nuestros Productos</h1>
  <div class="container text-center">

    <div class="row">
      <div class="col">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/Tintes.jpg" />
          <h4>Tintes de fantasia</h4>
          <h4> Precio</h4>
          <h6> ¢8500</h6>
          <div class="input-group input-group-sm">
          </div>
          <button type="button" class="btn btn-primary">Comprar</button>

          
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/Productos.jpg" />
          <h4>Productos para el cabello</h4>
          <h4> Precio</h4>
          <h6> ¢5000</h6>
          <button type="button" class="btn btn-primary">Comprar</button>

        </div>

      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/Barberia.jpg" />
          <h4>Productos de barberia</h4>
          <h4> Precio</h4>
          <h6> ¢12000</h6>
          <button type="button" class="btn btn-primary">Comprar</button>

        </div>
      </div>
    </div>

  </div><br><br>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/esmalte.jpg" />
          <h4>Esmalte de uñas</h4>
          <h4> Precio</h4>
          <h6> ¢5000</h6>
          <button type="button" class="btn btn-primary">Comprar</button>

        
    </form>


        </div>
      </div>



      <div class="col">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/Piel.jpg" />
          <h4>Productos para la piel</h4>
          <h4> Precio</h4>
          <h6> ¢5000</h6>

          <button type="button" class="btn btn-primary">Comprar</button>

        </div>

      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/crema.jpg" />
          <h4>Cremas para el cuerpo</h4>
          <h4> Precio</h4>
          <h6> ¢12000</h6>

          <button type="button" class="btn btn-primary">Comprar</button>

        </div>
      </div>
    </div>

  </div>
  <!-- Prueba enviar
  <div class="contendor-estetica">

    <form action="php/procesar-producto_carrito.php" method="post">
      <div>
        <label for="descripcion">Descripcion:</label>
        <input type="int" name="descripcion" id="descripcion" placeholder="Digita la descripcion">

      </div>
      <div>
        <label for="precio">Precio:</label>
        <input type="double" name="precio" id="precio" placeholder="Digita el precio">
      </div>

      <button type="submit">Comprar</button>
    </form>
-->
  </div>
  <!-- Prueba enviar-->


  <br>
  <br>
  <br>
  <br>
  <div class="container text-center">
    <h2 class="">Encuentranos en:</h2>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.3959514692547!2d-84.07062492524774!3d9.900942590199444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e34c171c793b%3A0xd93f42824d46b852!2zVXRvcMOtYSBCZWF1dHkgU2Fsw7Nu!5e0!3m2!1ses-419!2scr!4v1690477841853!5m2!1ses-419!2scr"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
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