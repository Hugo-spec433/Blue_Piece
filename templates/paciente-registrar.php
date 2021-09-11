<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Registrar <?=$patient?></h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Registrar</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="row">

                <div class="col-lg-6 login register">

                    <h2> Registrar <?=$patient?></h2>


                    <?php

                    if(isset($alerta)) {
                        echo "<div class='alert alert-warning' role='alert'>$alerta</div>";
                    }

                    ?>


                    <div id="tutor">
                        <form action="" method="post" role="form">

                            <div class="row">
                                <div class="form-group mt-3">
                                    <label>Datos Generales</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre(s) *" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido(s) *" required="">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group mt-3 textLeft">
                                    <input type="radio" name="sexo" id="sexo1" value="Femenino" required=""> <label class="labelRadio" for="sexo1">Femenino</label>
                                    <input type="radio" name="sexo" id="sexo2" value="Masculino" required=""> <label class="labelRadio" for="sexo2">Masculino</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="edad" id="edad" placeholder="Edad *" required="">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group mt-3 textLeft">
                                    <input type="radio" name="tiempo" id="tiempo1" value="meses" required=""> <label class="labelRadio" for="tiempo1">Meses</label>
                                    <input type="radio" name="tiempo" id="tiempo2" value="años" required=""> <label class="labelRadio" for="tiempo2">Años</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="pais" id="pais" placeholder="País *" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado *" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <label>Datos Opcionales</label>
                                    <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
                                </div>
                            </div>

                            <input type="hidden" name="userInput" value="checkRegister"/>
                            <div class="text-center submitPurple"><br><button type="submit">Registrarse</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->