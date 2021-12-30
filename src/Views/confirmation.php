<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base MVC with PHP</title>
</head>

<?php include './src/Views/layouts/header.php'; ?>

<body>
    <section class="d-flex justify-content-center mt-5">
        <h3>Tu tema "<?= $data[0]->getTopic()?>", con descripción "<?= $data[0]->getDescription() ?>", se ha borrado correctamente!</h3>
    </section>

    <section class="d-flex justify-content-center mt-5">
        <a href="index.php"><button class="btn btn-success">Volver</button></a>
    </section>

</body>

<?php include './src/Views/layouts/footer.php'; ?>

</html>