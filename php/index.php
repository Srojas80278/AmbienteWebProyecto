<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservación Citas | Utopía Salón</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0daff66fe6.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include('../include/templates/headerPHP.php');
    ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mx-auto">
                <div class="text-center border p-4 rounded bg-light mb-4">
                    <h1 class="display-4 text-bold">Reservación de Citas</h1>
                    <p class="lead">Agenda tu cita para disfrutar de nuestros servicios.</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "modeloCitas/conexionn.php";
    include "controladorCitas/eliminar_citas.php";
    ?>

    <div class="container-fluid row">
        <div class="col-lg-4 col-md-6 border p-4 mx-auto my-4">
            <form method="POST" class="pl-4">
                <h3 class="text-center text-primary mb-4">Registro de Personas</h3>

                <?php
                include "modeloCitas/conexionn.php";
                include "controladorCitas/registro_citas.php";
                ?>

                <!-- Estilista -->
                <div class="mb-3">
                    <label for="estilista" class="form-label">Estilista:</label>
                    <input type="text" class="form-control" id="estilista" name="estilista"
                        placeholder="Ingresa el nombre del estilista">
                </div>

                <!-- Fecha de la cita -->
                <div class="mb-3">
                    <label for="fechaCita" class="form-label">Fecha de la cita:</label>
                    <input type="date" class="form-control" id="fechaCita" name="fechaCita">
                </div>

                <!-- Hora de la cita -->
                <div class="mb-3">
                    <label for="horaCita" class="form-label">Hora de la cita:</label>
                    <input type="time" class="form-control" id="horaCita" name="horaCita">
                </div>



                <!-- Sede de la cita -->
                <div class="mb-3">
                    <label for="sede" class="form-label">Sede:</label>
                    <input type="text" class="form-control" id="sede" name="sede"
                        placeholder="Ingresa la sede de la cita">
                </div>

                <!-- NombreCliente -->
                <div class="mb-3">
                    <label for="nombreCliente" class="form-label">Nombre del cliente:</label>
                    <input type="text" class="form-control" id="nombreCliente" name="nombreCliente"
                        placeholder="Nombre del Cliente" minlength="3">
                </div>

                <!-- Servicio a realizar -->
                <div class="mb-3">
                    <label for="servicio" class="form-label">Servicio a realizar:</label>
                    <input type="text" class="form-control" id="servicio" name="Servicio"
                        placeholder="Servicio (Manicure, Color, Highlights)">
                </div>

                <!-- Correo cliente -->
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="correo" name="correo"
                        placeholder="Ingresa un correo electrónico">
                </div>

                <button type="submit" class="btn btn-primary mt-3" name="btnregistrar" value="ok">Registrar
                    Cita</button>
            </form>
        </div>


        <!-- Div derecho --> <!-- p-4: Darle padding de 4 -->
        <div class="col-lg-8 col-md-6">
            <div class="p-4">
                <div class="table-responsive">
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
                                    <td>
                                        <?php echo $datos->id_cita; ?>
                                    </td>
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
                                        <div class="btn-group">
                                            <a href="modificar_cita.php?id=<?= $datos->id_cita ?>"
                                                class="btn btn-primary btn-sm d-inline-block"><i
                                                    class="fa-solid fa-user-pen fa-sm"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm d-inline-block delete-link"
                                                data-id="<?= $datos->id_cita ?>"><i class="fa-solid fa-trash fa-sm"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de confirmación -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar esta cita?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href="#" id="deleteLink" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <h2 class="mb-4">Preguntas Frecuentes - Módulo de Citas</h2>

        <div class="accordion" id="faqAccordion">
            <!-- Pregunta 1 -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            ¿Cómo puedo agendar una cita?
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        Para agendar una cita, sigue estos pasos:
                        <ol>
                            <li>Inicia sesión en tu cuenta.</li>
                            <li>Ve a la sección de Agendar Citas.</li>
                            <li>Selecciona la fecha y hora deseada.</li>
                            <li>Elige el servicio que te gustaría recibir.</li>
                            <li>Confirma la cita.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Pregunta 2 -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿Puedo cancelar o reprogramar una cita?
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                    <div class="card-body">
                        Sí, puedes cancelar o reprogramar una cita siguiendo estos pasos:
                        <ol>
                            <li>Inicia sesión en tu cuenta.</li>
                            <li>Ve a la sección de Mis Citas.</li>
                            <li>Encuentra la cita que deseas modificar y selecciona "Eliminar" o "Editar".</li>
                            <li>Sigue las instrucciones y confirma.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Pregunta 3 -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ¿Puedo ver mis citas anteriores?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                    <div class="card-body">
                        Sí, puedes ver tus citas anteriores siguiendo estos pasos:
                        <ol>
                            <li>Inicia sesión en tu cuenta.</li>
                            <li>Ve a la sección de Mis Citas.</li>
                            <li>Verás una lista de tus citas anteriores junto con los detalles correspondientes.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br><br>

    <?php
    include('../include/templates/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
        document.addEventListener('DOMContentLoaded', function () {
            const deleteLinks = document.querySelectorAll('.delete-link');
            const confirmDeleteModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
            const deleteLink = document.getElementById('deleteLink');

            deleteLinks.forEach(link => {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    const id = this.getAttribute('data-id');
                    deleteLink.href = `index.php?id=${id}`;
                    confirmDeleteModal.show();
                });
            });
        });
    </script>
</body>

</html>