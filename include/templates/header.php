<?php
session_start(); // Iniciar sesion para poder aplicar acceso por roles
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/Reservar.css">
</head>

<body>
  <!-- Header -->
  <!-- Logo -->
  <header id="mi-header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <nav class="navbar bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/header/Logo2.png" alt="" width="50" height="50">
            Utopía Beauty Salón</a>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Principal.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="Reservar.php">Reservar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="ShoppingCart.php">Realizar Compra</a>
            </li>
            <!--Se valida el rol del usuario para que este boton solo se muestre si se ha iniciado sesion como Admin -->
            <li class="nav-item">
              <?php if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1): ?>
                <a class="nav-link active" href="MOSTRAR-USUARIOS.php">Usuarios</a>
              <?php endif; ?>
            </li>

          </ul>
        </div>
      </div>
      <!-- Carrito de Compras -->
      <nav class="navbar bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="carrito.php">
            <img src="img/header/CarritoCompra.png" alt="" width="50" height="50">
          </a>
        </div>
      </nav>

      <!-- DropDown -->
      <div class="dropdown dropstart">
        <a id="BotonDropDown" class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          <img src="img/header/Logo2.png" alt="" width="30" height="30">
        </a>
        </a>
        <ul id="DropDesplegado" class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Perfil</a></li>
          <li><a class="dropdown-item" href="#">Métodos de pago</a></li>
          <li><a class="dropdown-item" href="php/Salir.php">Cerrar Sesión</a></li>
        </ul>
      </div>
    </nav>
  </header>