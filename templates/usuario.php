<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Área de Usuario</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Usuario</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <?php

                    if(!empty($user)) {

                    ?>

                        <div class="userArea">

                            <h4>Bienvenido <?= $user["nombre"] ?> [<a href="logout.php">Salir</a>]</h4>

                            <section id="userArea" class="contact">
                                <div class="container aos-init aos-animate">

                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="info-box mb-4">
                                                <i class="bi bi-file-person"></i>
                                                <h3><a href="?section=usuario&action=consultar">Consultar mi información</a></h3>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="info-box mb-4">
                                                <i class="bi bi-file-earmark-person-fill"></i>
                                                <h3><a href="?section=usuario&action=editar">Editar mi información</a></h3>
                                            </div>
                                        </div>


                                        <?php

                                        if($user["tipo"] === "Tutor" || $user["tipo"] === "Especialista") {


                                        ?>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="info-box  mb-4">
                                                    <i class="bi bi-file-medical"></i>
                                                    <h3><a href="?section=paciente&action=registrar">Registrar a un <?= $patient ?></a></h3>

                                                </div>
                                            </div>


                                            <div class="col-lg-3 col-md-6">
                                                <div class="info-box  mb-4">
                                                    <i class="bi bi-clipboard-data"></i>
                                                    <h3><a href="?section=paciente">Mis <?= $patient ?>s</a></h3>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>

                                        <div class="col-lg-3 col-md-6">
                                            <div class="info-box  mb-4">
                                                <i class="bi bi-exclamation-diamond"></i>
                                                <h3><a href="?section=usuario&action=eliminar">Eliminar mi Cuenta</a></h3>

                                            </div>
                                        </div>

                                    </div>



                                </div>
                            </section>

                        </div>


                    <?php
                    }//IF

                    else {

                    ?>

                        <h3>Lo sentimos, esta área es solo para usuarios, <a href="?section=usuario&action=registrar">registrese</a>.</h3>

                    <?php

                    }//Else

                    ?>

                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->