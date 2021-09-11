<main id="main">

    <?php
        $patient = $patient ?? "Paciente";
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

                if(empty($patients) || empty($user)) {
                    echo "No tiene {$patient}s registrados.";
                }
                else {

                    echo '<table class="table">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Detalles</th>
                            </tr>';

                    foreach($patients as $paciente) {

                        ?>

                            <tr>
                                <td scope="row"><?=$paciente["nombre"] . " " . $paciente["apellido"] ?></td>
                                <td scope="row"><?=$paciente["edad"]?></td>
                                <td scope="row"><a href="?section=paciente&action=consultar&parameter=<?=$paciente["id"]?>">Ver Detalles</a></td>
                            </tr>


                        <?php
                    }

                    echo '</table>';
                }
                ?>

            </div>

        </div>
    </section>

</main><!-- End #main -->