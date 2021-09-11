<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Herramienta M-CHAT</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>M-CHAT</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="mchat">
                <?php

                    if(empty($data)) {
                        echo "No hay resultados diagnósticos en la base de datos.";
                    }
                    else {

                        echo "A continuación se muestran los diagnósticos efectuados con la herramienta M-CHAT<br><br>";

                        foreach($data as $valor) {

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
                    }
                ?>

            </div>

        </div>
    </section>

</main><!-- End #main -->