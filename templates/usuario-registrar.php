<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Registrar Nuevo Usuario</h2>
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

                    <h2> Registrar Usuario</h2>


                    <?php

                    if(isset($alerta)) {
                        echo "<div class='alert alert-warning' role='alert'>$alerta</div>";
                    }

                    ?>

                    <p>

                    <div class='alert alert-primary' role='alert'>
                        Por favor seleccione el tipo de cuenta que desea registrar y proporcione los datos requeridos.
                    </div>

                        <button class="btn btn-primary" type="button" onclick="updateFormValue('tipo','Tutor'); showForm('tutor')">Padre o Tutor</button>
                        <button class="btn btn-primary" type="button" onclick="updateFormValue('tipo','Especialista'); showForm('tutor')">Especialista</button>
                        <button class="btn btn-primary" type="button" onclick="updateFormValue('tipo','Representante'); showForm('tutor')">Representante Empresa</button>


                    </p>

                    <div id="tutor" style="display:none;">
                        <form action="" method="post" role="form">

                            <div class="row">
                                <div class="form-group mt-3">
                                    <label>Datos Generales</label>
                                    <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo de Cuenta *" readonly required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">

                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre(s) *" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido(s) *" required="">
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
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico *" required="">
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña *" required="">
                            </div>

                            <div class="form-group mt-3">
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="Verificar Contraseña *" required="">
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


                            <div class="my-3">

                            </div>
                            <input type="hidden" name="userInput" value="checkRegister"/>
                            <div class="text-center submitPurple"><button type="submit">Registrarse</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->