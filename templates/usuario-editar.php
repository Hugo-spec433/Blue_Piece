<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Editar Usuario</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Editar</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="usuario editar">
                <?php

                if(isset($warning)) {
                    echo $warning;
                }
                else {

                    if(isset($success)) {

                        echo "<div class='alert alert-success' role='alert'>$success</div>";

                    }

                ?>

                    <div class="row d-flex justify-content-center">

                        <h2 class="text-center" >Editar Mi Información</h2>

                        <div class="col-md-8 editar">

                            <form method="post">

                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label class="title">Datos Generales</label>
                                        <label>Tipo de Cuenta: </label>
                                        <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo de Cuenta *" value="<?=$userInfo["tipo"]?>" readonly required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mt-3">

                                        <label>Nombre: </label>

                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre(s) *" value="<?=$userInfo["nombre"]?>"  required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mt-3">

                                        <label>Apellido: </label>

                                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido(s) *" value="<?=$userInfo["apellido"]?>"  required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label>País: </label>
                                        <input type="text" class="form-control" name="pais" id="pais" placeholder="País *" value="<?=$userInfo["pais"]?>"  required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label>Estado: </label>
                                        <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado *" value="<?=$userInfo["estado"]?>"  required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label class="title">Datos Opcionales</label>
                                        <label>Ciudad: </label>
                                        <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" value="<?=$userInfo["ciudad"]?>" >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label>Dirección: </label>
                                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" value="<?=$userInfo["direccion"]?>" >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label>Teléfono: </label>
                                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" value="<?=$userInfo["telefono"]?>" >
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label class="title">Datos de la Cuenta</label>
                                        <label>Email: </label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico *" value="<?=$userInfo["email"]?>"  required="">
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label>Nueva Contraseña: </label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Dejar en blanco si no se desea cambiar">
                                </div>

                                <div class="form-group mt-3">
                                    <label>Verificar Contraseña: </label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Verificar Contraseña">
                                </div>


                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label class="title">Verificación</label>
                                        <label>Contraseña Actual: </label>
                                        <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Contraseña Actual" required="">
                                    </div>
                                </div>


                                <div class="submitPurple text-center submitButton">
                                    <button type="submit">Editar</button>
                                </div>


                            </form>

                        </div>

                    </div>

                <?php
                }
                ?>

            </div>

        </div>
    </section>

</main><!-- End #main -->