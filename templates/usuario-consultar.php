<main id="main">

    <?php

    $ciudad = $userInfo["ciudad"] ?? "No se proporcionó";
    $direccion = $userInfo["direccion"] ?? "No se proporcionó";
    $telefono = $userInfo["telefono"] ?? "No se proporcionó";

    ?>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Información del Usuario</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Consultar</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <h2>Información del Usuario</h2>

                    <form action="" method="post" role="form">
                        <div class="row">
                            <div class="form-group mt-3">
                                <b>Nombre</b>: <?=$userInfo["nombre"] . ' ' . $userInfo["apellido"]?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mt-3">
                                <b>Email</b>: <?=$userInfo["email"]?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mt-3">
                                <b>País</b>: <?=$userInfo["pais"]?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group mt-3">
                                <b>Estado</b>: <?=$userInfo["estado"]?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mt-3">
                                <b>Ciudad</b>: <?=$ciudad?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mt-3">
                                <b>Dirección</b>: <?=$direccion?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group mt-3">
                                <b>Teléfono</b>: <?=$telefono?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group mt-3">
                                <b>Tipo de Cuenta</b>: <?=$userInfo["tipo"]?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mt-3 alert alert-primary">
                                Si encuentra algún problema o desea actualizar su información, puede hacerlo en la sección de <a href="?section=usuario&action=editar">Editar Mi Información</a>
                            </div>
                        </div>

                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->