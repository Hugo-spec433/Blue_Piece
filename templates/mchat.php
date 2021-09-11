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
                En esta página se visualiza el Cuestionario <b>M-CHAT</b> Revisado de Detección del Autismo en Niños Pequeños (M-CHAT-R) que permite evaluar el nivel de riesgo de trastorno del espectro autista (TEA).
                <div class="mchatInstructions">
                    <span class="text-danger">
                        Instrucciones:
                    </span>
                    Responda las siguientes preguntas en base a las reacciones de su hijo/a o paciente.
                </div>
            </div>


            <form method="POST">

                <div id="mchat">
                    <ol class="questions">

                        <!-- Pregunta 1 -->
                        <div class="question">
                            <li class="questionDescription">
                                Si usted señala algo al otro lado de la habitación, ¿su hijo/a lo mira? (<b>POR EJEMPLO</b>, Si usted señala a un juguete, un peluche o un animal, ¿su hijo/a lo mira?)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="uno" id="mchat1-1" value="TRUE">
                                <label class="form-check-label" for="mchat1-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="uno" id="mchat1-2" value="FALSE">
                                <label class="form-check-label" for="mchat1-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 2 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Alguna vez se ha preguntado si su hijo/a es sordo/a?
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="dos" id="mchat2-1" value="TRUE">
                                <label class="form-check-label" for="mchat2-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="dos" id="mchat2-2" value="FALSE">
                                <label class="form-check-label" for="mchat2-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 3 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Su hijo/a juega a juegos de fantasía o imaginación? (<b>POR EJEMPLO</b>, “hace como que” bebe de una taza vacía, habla por teléfono o da de comer a una muñeca o peluche,…)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="tres" id="mchat3-1" value="TRUE">
                                <label class="form-check-label" for="mchat1-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="tres" id="mchat3-2" value="FALSE">
                                <label class="form-check-label" for="mchat1-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 4 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿A su hijo le gusta subirse a cosas? (<b>POR EJEMPLO</b> a una silla, escaleras, tobogán,…)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="cuatro" id="mchat4-1" value="TRUE">
                                <label class="form-check-label" for="mchat4-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="cuatro" id="mchat4-2" value="FALSE">
                                <label class="form-check-label" for="mchat4-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 5 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Hace su hijo/a movimientos inusuales con sus dedos cerca de sus ojos? (<b>POR EJEMPLO</b>, mueve sus dedos cerca de sus ojos de manera inusual?)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="cinco" id="mchat5-1" value="TRUE">
                                <label class="form-check-label" for="mchat5-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="cinco" id="mchat5-2" value="FALSE">
                                <label class="form-check-label" for="mchat5-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 6 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Su hijo/a señala con un dedo cuando quiere pedir algo o pedir ayuda? (<b>POR EJEMPLO</b>, cuando señala un juguete o algo de comer que está fuera de su alcance)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="seis" id="mchat6-1" value="TRUE">
                                <label class="form-check-label" for="mchat6-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="seis" id="mchat6-2" value="FALSE">
                                <label class="form-check-label" for="mchat6-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 7 -->
                        <div class="question">
                            <li class="questionDescription">
                                Su hijo/a señala con un dedo cuando quiere mostrarle algo que le llama la atención? (<b>POR EJEMPLO</b>, cuando señala un juguete o algo de comer que está fuera de su alcance)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="siete" id="mchat7-1" value="TRUE">
                                <label class="form-check-label" for="mchat7-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="siete" id="mchat7-2" value="FALSE">
                                <label class="form-check-label" for="mchat7-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 8 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Su hijo/a se interesa en otros niños? (<b>POR EJEMPLO</b>, cuando mira con atención a otros niños, les sonríe o se les acerca)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="ocho" id="mchat8-1" value="TRUE">
                                <label class="form-check-label" for="mchat8-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="ocho" id="mchat8-2" value="FALSE">
                                <label class="form-check-label" for="mchat8-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 9 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Su hijo/a le muestra cosas acercándolas o levantándolas para que usted las vea – no para pedir ayuda sino solamente para compartirlas con usted? (<b>POR EJEMPLO</b>, le muestra una flor o un peluche o un coche de juguete)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="nueve" id="mchat9-1" value="TRUE">
                                <label class="form-check-label" for="mchat9-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="nueve" id="mchat9-2" value="FALSE">
                                <label class="form-check-label" for="mchat9-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 10 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Su hijo/a responde cuando usted le llama por su nombre? (<b>POR EJEMPLO</b>, se vuelve, habla o balbucea, o deja de hacer lo que estaba haciendo para mirarle)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="diez" id="mchat10-1" value="TRUE">
                                <label class="form-check-label" for="mchat10-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="diez" id="mchat10-2" value="FALSE">
                                <label class="form-check-label" for="mchat10-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 11 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Cuándo usted sonríe a su hijo/a, él o ella también le sonríe?
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="once" id="mchat-1" value="TRUE">
                                <label class="form-check-label" for="mchat-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="once" id="mchat-2" value="FALSE">
                                <label class="form-check-label" for="mchat-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 12 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Le molestan a su hijo/a ruidos cotidianos? (<b>POR EJEMPLO</b>, la aspiradora o la música, incluso cuando no está excesivamente alta?)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="doce" id="mchat-1" value="TRUE">
                                <label class="form-check-label" for="mchat-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="doce" id="mchat-2" value="FALSE">
                                <label class="form-check-label" for="mchat-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 13 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Su hijo/a camina solo?
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="trece" id="mchat-1" value="TRUE">
                                <label class="form-check-label" for="mchat-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="trece" id="mchat-2" value="FALSE">
                                <label class="form-check-label" for="mchat-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 14 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Su hijo/a le mira a los ojos cuando usted le habla, juega con él o ella, o lo viste?
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="catorce" id="mchat-1" value="TRUE">
                                <label class="form-check-label" for="mchat-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="catorce" id="mchat-2" value="FALSE">
                                <label class="form-check-label" for="mchat-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 15 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Su hijo/a imita sus movimientos? (<b>POR EJEMPLO</b>, decir adiós con la mano, aplaudir o algún ruido gracioso que usted haga)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="quince" id="mchat-1" value="TRUE">
                                <label class="form-check-label" for="mchat-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="quince" id="mchat-2" value="FALSE">
                                <label class="form-check-label" for="mchat-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 16 -->
                        <div class="question">
                            <li class="questionDescription">
                                Si usted se gira a ver algo, ¿su hijo/a trata de mirar hacia lo que usted está mirando?
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="dieciseis" id="mchat-1" value="TRUE">
                                <label class="form-check-label" for="mchat-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="dieciseis" id="mchat-2" value="FALSE">
                                <label class="form-check-label" for="mchat-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 17 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Su hijo/a intenta que usted le mire/preste atención? (<b>POR EJEMPLO</b>, busca que usted le haga un cumplido, o le dice “mira” o “mírame”)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="diecisiete" id="mchat-1" value="TRUE">
                                <label class="form-check-label" for="mchat-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="diecisiete" id="mchat-2" value="FALSE">
                                <label class="form-check-label" for="mchat-2">
                                    No
                                </label>
                            </div>
                        </div>

                            <!-- Pregunta 18 -->
                        <div class="question">
                            <li class="questionDescription">
                                ¿Su hijo/a le entiende cuando usted le dice que haga algo? (<b>POR EJEMPLO</b>, si usted no hace gestos, ¿su hijo/a entiende “pon el libro encima de la silla” o “tráeme la manta”?)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="dieciocho" id="mchat-1" value="TRUE">
                                <label class="form-check-label" for="mchat-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="dieciocho" id="mchat-2" value="FALSE">
                                <label class="form-check-label" for="mchat-2">
                                    No
                                </label>
                            </div>
                        </div>

                            <!-- Pregunta 19 -->
                        <div class="question">
                            <li class="questionDescription">
                                Si algo nuevo pasa, ¿su hijo/a le mira para ver como usted reacciona al respecto? (<b>POR EJEMPLO</b>, si oye un ruido extraño o ve un juguete nuevo, ¿se gira a ver su cara?)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="diecinueve" id="mchat-1" value="TRUE">
                                <label class="form-check-label" for="mchat-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="diecinueve" id="mchat-2" value="FALSE">
                                <label class="form-check-label" for="mchat-2">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 20 -->
                        <div class="question">
                            <li class="questionDescription">
                                Le gustan a su hijo/a los juegos de movimiento? (<b>POR EJEMPLO</b>, le gusta que le balancee, o que le haga “el caballito” sentándole en sus rodillas)
                            </li>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="veinte" id="mchat-1" value="TRUE">
                                <label class="form-check-label" for="mchat-1">
                                    Sí
                                </label>
                            </div>
                            <div class="answer">
                                <input class="form-check-input" type="radio" name="veinte" id="mchat-2" value="FALSE">
                                <label class="form-check-label" for="mchat-2">
                                    No
                                </label>
                            </div>
                        </div>

                    </ol>

                    <div class="pricing">
                        <div class="btn-wrap">
                            <input type="hidden" name="userInput" value="realizarMCHAT"/>
                            <button type="submit" class="btn-buy">Completar M-CHAT</button>
                        </div>
                    </div>

                </div>
            </form>

        </div>
    </section>

</main><!-- End #main -->