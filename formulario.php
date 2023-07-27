<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</header>

<main class="contenedor">
    <h1></h1>
    <div class="contendor-estetica">

        <form action="php/formulario-producto.php" method="post">
            <div>
                <label for="descripcion">Descripcion:</label>
                <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion">
            </div>
            <div>
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="Precio">
            </div>

            <button type="submit">Procesar datos</button>
        </form>

        <script>
            
        </script>

        <div class="container">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label><button type="submit"
                    class="btn btn-primary">Submit</button>
            </div>
        </div>

    </div>
</main>