<?php include './src/Views/layouts/header.php' ?>

<main>
    <div class="row">
        <div class="col-xs-12 xol-sm-12 col-md-12 col-lg-12 col-xxl-12">
        <section class="d-flex justify-content-center mt-4">
            <a href="?action=create"><button type="button" class="btn btn-info">Añadir petición</button></a>
        </section>

        <table class="table table-striped table-hover mt-3" id="tab-cont">
            <thead>
                <th>Tema</th>
                <th>Descripción</th>
                <th>Usuario</th>
                <th>Creado a fecha</th>
                <th class="text-center">Acciones</th>
            </thead>
            <tbody>

                <?php

                foreach ($data as $request) {
                    $html = <<<HTML
                    <tr>
                        <td>{$request->getTopic()}</td>
                        <td>{$request->getDescription()}</td>
                        <td>{$request->getUserName()}</td>
                        <td>{$request->getCreateAt()}</td>
                        <td class="d-flex justify-content-evenly">
                            <a href="?action=edit&&id_request={$request->getId()}"><button type="button" class="btn btn-primary">Editar</button></a>
                            <a href="?action=delete&&id_request={$request->getId()}"><button button type="button" class="btn btn-danger">Borrar</button></a>
                        </td>
                    </tr>
                    HTML;
                    echo $html;
                }
                ?>
            </tbody>
        </table>

        <section class="d-flex justify-content-center mt-3 mb-3">
            <a href="index.php" onClick='alert("Ya te encuentras en la página de soporte.")'><button type="button" class="btn btn-warning" id="support">Contactar con soporte</button></a>
        </section>
    </div>
</main>

<?php include './src/Views/layouts/footer.php'; ?>