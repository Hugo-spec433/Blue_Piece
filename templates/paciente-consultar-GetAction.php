<main id="main">

    <?php

        $userInfo = $data ?? NULL;

        $ciudad = $userInfo["ciudad"] ?? "No se proporcionó";
        $direccion = $userInfo["direccion"] ?? "No se proporcionó";
        $telefono = $userInfo["telefono"] ?? "No se proporcionó";


    ?>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Mis <?=$patient?>s</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Paciente</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="mchat">
                <?php

                if(empty($userInfo)) {
                    echo "No se encontró la información.";
                }
                else {

                    ?>

                <div class="row">

                    <div class="col-lg-6">

                        <h2>Información del <?=$patient?></h2>


                            <div class="row">
                                <div class="form-group mt-3">
                                    <b>Nombre</b>: <?=$userInfo["nombre"] . ' ' . $userInfo["apellido"]?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <b>Edad</b>: <?=$userInfo["edad"]?>
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

                            <div class="mchat row" style="margin-top:40px;">
                                <h2>MCHAT</h2>

                                <?php
                                    if(empty($mchat)) {

                                        echo '<div class="alert alert-warning" role="alert">
                                              '.$alerta.'
                                            </div>';

                                    }
                                    else {

                                        foreach($mchat as $valor) {

                                ?>



                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Puntuación</th>
                                                <th scope="col">Nivel de Riesgo</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Detalles</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td scope="row"><?=$valor["resultado"]?></td>
                                                <td scope="row"><?=$valor["riesgo"]?></td>
                                                <td scope="row"><?=$valor["fecha"]?></td>
                                                <td scope="row"><a href="?section=mchat&action=consultar&parameter=<?=$valor["id"]?>">Ver Detalles</a></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                <?php
                                        }
                                ?>
                                    <button class="btn-primary" onclick="document.location='?section=mchat&id=<?=$userInfo["id"]?>'">Realizar el cuestionario MCHAT</button>

                                <?php
                                    }
                                ?>


                            </div>


                    </div>

                    <?php

                }
                ?>

             </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->