<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base MVC with PHP</title>
</head>

<body>

    <?php include './src/Views/layouts/header.php'; ?>


    <h3 class="text-center mt-5">Añadir una petición</h3>
    <section>
        <section>
            <div class="d-flex justify-content-center align-items-center">
                <form action="?action=store" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tema</span>
                        <select name="topic" id="topic" required class="form-control" aria-label="Default select example">
                            <option value="Select an option" hidden selected>Seleccionar una opción</option>
                            <option value="Clases sin subir">Las clases no están subidas</option>
                            <option value="El WiFi no tira">El WiFi no tira</option>
                            <option value="Se me olvidó la píldora">Se me olvidó la píldora</option>
                            <option value="No me abre el Zoom">No me abre el Zoom</option>
                            <option value="El visual petó">El visual petó</option>
                            <option value="Mi PC tiene vida propia">Mi PC tiene vida propia</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg mb-3">
                        <span for="description" class="input-group-text" id="inputGroup-sizing-lg">Descripción</span>
                        <textarea class="form-control" aria-label="With textarea" type="text" name="description" id="description" placeholder="Describe tu problema" required></textarea>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input name="user_name" id="user_name" required type="text" class="form-control" placeholder="Usuario" aria-label="Username">
                        <input class="form-control btn-success" type="submit" value="Añadir">
                    </div>
                </form>
        </section>

        <section class="d-flex justify-content-center">
            <a href="index.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
        </section>

    </section>
</body>

<?php include './src/Views/layouts/footer.php'; ?>

</html>