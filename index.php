<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÍTULO DEL POST</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
</head>

<style>
    .btn {
        margin-right: 1.4rem!important;
    }
</style>

<body>
    <div class="container">
        <div class="mb-4" id="cabecera">BIENVENIDO A BLOG-POST 2.0</div>
        <div class="text-center" id="post">
            <h1>Este es el título atractivo e interesante del post</h1>
            <p>Este es el párrafo de inicio donde vamos a explicar las cosas increíbles que se pueden hacer con ramas.
            </p>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="childModal" tabindex="-1" aria-labelledby="childModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Evento</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form method="GET" action="">
                        <div class="modal-body">

                            <div class="mb-2">
                                <label for="hora-ini" class="form-label">Hora Inicio</label>
                                <input type="time" class="form-control" id="hora-ini">
                            </div>
                            <div class="mb-2">
                                <label for="hora-fin" class="form-label">Hora Fin</label>
                                <input type="time" class="form-control" id="hora-fin">
                            </div>
                            <div class="mb-2 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Admin</label>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr>

        <div class="text-center">
            <?php include 'arrays.php' ?>
        </div>
    </div>

    <footer>
        <div class="container" style="background-color: #DDD">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Copyright &copy; 2024</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
