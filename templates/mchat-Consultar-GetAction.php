<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Resultado MCHAT</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>M-CHAT - Resultado</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="mchat">
                <?php

                    if(empty($data)){
                        echo "Error, No se encontró la información seleccionada.";
                    }
                    else { //Mostrar Información
                        if($data["riesgo"] === "Alto"){
                            $alertType = "bg-danger";
                        }
                        elseif ($data["riesgo"] === "Medio"){
                            $alertType = "bg-warning";
                        }
                        else {
                            $alertType = "bg-success";
                        }
                ?>


                        <div class="container" id="resultado">
                            <div class="row-cols-lg-12">
                                <div class="feature col">
                                    <div class="feature-icon <?=$alertType?> bg-gradient">
                                        <svg class="bi" width="1em" height="1em"></svg>
                                    </div>
                                    <h2>Resultado</h2>

                                    <p>El resultado del cuestionario MCHAT fue <b><?=$data["resultado"]?> de 20</b>, indicando un riesgo <b><?=$data["riesgo"]?></b> de TEA</p>

                                </div>
                            </div>
                        </div>


                        <div class="container" style="margin-top:50px;">
                            <div class="row-cols-lg-12">
                                <div class="feature col">
                                    <div class="feature-icon bg-primary bg-gradient">
                                        <svg class="bi" width="1em" height="1em"></svg>
                                    </div>
                                    <h2>¿Cómo se calcula?</h2>
                                    <p>MCHAT emplea un algoritmo que funciona de manera sencilla, mientras menor la cantidad de puntos, menor el riesgo de TEA del paciente, funcionando de la siguiente manera: </p>
                                    <ul>
                                        <li>Sí la puntuación es entre 0 y 2, el nivel de riesgo se considera <b>Bajo</b></li>
                                        <li>Sí la puntuación es entre 3 y 7, el nivel de riesgo se considera <b>Medio</b></li>
                                        <li>Sí la puntuación es entre 8 y 20, el nivel de riesgo se considera <b>Alto</b></li>

                                    </ul>
                                    <p>Para más información sobre la herramienta MCHAT puede dirigirse a la página oficial <a href="https://mchatscreen.com/mchat-rf/">https://mchatscreen.com/mchat-rf/</a></p>

                                </div>
                            </div>
                        </div>


                        <div class="container" style="margin-top:50px;">
                            <div class="row-cols-lg-12">
                                <div class="feature col">
                                    <div class="feature-icon bg-success bg-gradient">
                                        <svg class="bi" width="1em" height="1em"></svg>
                                    </div>
                                    <h2>Recomendaciones</h2>
                                    <p>Próximamente...</a></p>

                                </div>
                            </div>
                        </div>


                <?php
                    }

                ?>
            </div>

        </div>
    </section>

</main><!-- End #main -->