<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CITAS CRUD</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0daff66fe6.js" crossorigin="anonymous"></script>
</head>


<body>

    <h1 class="text-center">Hola Mundo</h1>

    <div class="container-fluid row">
        <form class="col-4">
            <button id="mostrarFormulario" class="btn btn-primary">Mostrar Formulario</button>

            <div id="formularioContainer" class="col-4" style="display: none;">
                <h3 class="text-center text-secondary">Registro de Personas</h3>

                <!-- Estilista -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Estilista:</label>
                    <input type="text" class="form-control" name="estilista"
                        placeholder="Ingresa el nombre del estilista" aria-describedby="emailHelp">
                </div>

                <!-- Fecha de la cita -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de la cita:</label>
                    <input type="date" class="form-control" name="fechaCita" id="fechaCita"
                        aria-describedby="emailHelp">
                </div>

                <!-- Hora de la cita -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hora de la cita (Ejemplo 7:00 pm):</label>
                    <input type="text" class="form-control" name="horaCita" placeholder="7:00 pm, 8:00 pm, 6:00 pm"
                        aria-describedby="emailHelp">
                </div>

                <!-- Sede de la cita -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sede:</label>
                    <input type="text" class="form-control" name="sede" placeholder="Ingresa la sede de la cita"
                        aria-describedby="emailHelp">
                </div>

                <!-- NombreCliente -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del cliente:</label>
                    <input type="text" class="form-control" name="nombreCliente" placeholder="Nombre del Cliente"
                        aria-describedby="emailHelp" minlength="3">
                </div>

                <!-- Servicio a realizar -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Servicio a realizar:</label>
                    <input type="text" class="form-control" name="Servicio"
                        placeholder="Servicio (Manicure, Color, Highlights)" aria-describedby="emailHelp">
                </div>

                <!-- Correo cliente -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo Electrónico:</label>
                    <input type="email" class="form-control" name="correo" placeholder="Ingresa un correo electrónico"
                        aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar Cita</button>
                <button id="ocultarFormulario" class="btn btn-secondary">Cancelar Formulario de Cita</button>
        </form>

    </div>

    <!-- Div derecho --> <!-- p-4: Darle padding de 4 -->
    <div class="col-8 p-4">
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#Cita</th>
                    <th scope="col">Estilista</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Sede</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Correo Cliente</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "modeloCitas/conexionn.php";
                $sql = $conexion->query("SELECT * FROM Citas");
                while ($datos = $sql->fetch_object()) { ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <?php echo $datos->estilista; ?>
                        </td>
                        <td>
                            <?php echo $datos->fecha; ?>
                        </td>
                        <td>
                            <?php echo $datos->hora; ?>
                        </td>
                        <td>
                            <?php echo $datos->sede; ?>
                        </td>
                        <td>
                            <?php echo $datos->nombre_cliente; ?>
                        </td>
                        <td>
                            <?php echo $datos->servicio; ?>
                        </td>
                        <td>
                            <?php echo $datos->descripcion_servicio; ?>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary"><i class="fa-solid fa-user-pen"></i></a>
                            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }
                ?>





            </tbody>
        </table>
    </div> <!-- Finaliza listado -->


    </div>


    <!-- JavaScript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>


    <!-- Ajustamos para que el cliente solo pueda agendar citas para el dia siguiente. -->
    <script>
        const fechaInput = document.getElementById('fechaCita');
        const fechaActual = new Date();
        fechaActual.setDate(fechaActual.getDate() + 1);
        const anio = fechaActual.getFullYear();
        const mes = (fechaActual.getMonth() + 1).toString().padStart(2, '0');
        const dia = fechaActual.getDate().toString().padStart(2, '0');
        const fechaMinima = `${anio}-${mes}-${dia}`;
        fechaInput.min = fechaMinima;
    </script>

    <script>
        document.getElementById('mostrarFormulario').addEventListener('click', function (event) {
            event.preventDefault(); // Evitar la acción por defecto (recarga de la página)
            var formularioContainer = document.getElementById('formularioContainer');
            formularioContainer.style.display = 'block'; // Muestra el formulario
        });
    </script>

    <script>
        document.getElementById('mostrarFormulario').addEventListener('click', function () {
            var formularioContainer = document.getElementById('formularioContainer');
            formularioContainer.style.display = 'block'; // Muestra el formulario
        });

        document.getElementById('ocultarFormulario').addEventListener('click', function () {
            var formularioContainer = document.getElementById('formularioContainer');
            formularioContainer.style.display = 'none'; // Oculta el formulario
        });
    </script>


</body>

</html>