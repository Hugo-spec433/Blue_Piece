<!DOCTYPE html>
<html lang="es_mx">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blue Piece: Sistema de apoyo a la detección de riesgo del Trastorno del Espectro Autista</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top <?php if(!isset($index)){echo "header-inner-pages";} ?>">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a style="color:CYAN;" href="index.php">BLUE <span style="color:WHITE;">PIECE</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">¿Quiénes Somos?</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto " href="?section=paciente">M-Chat</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contáctanos</a></li>
            <?PHP

            if(empty($_SESSION["user"])) {
                echo '<li><a class="getstarted scrollto" href="?section=login">¡Ingresar!</a></li>';
            }
            else {

                echo "<li><a class='getstarted scrollto' href='?section=usuario'>" . $user["nombre"] . "</a></li>";
            }
            ?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
