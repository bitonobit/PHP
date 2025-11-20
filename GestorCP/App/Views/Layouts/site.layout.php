<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Candy González">
  <title>Bitonobit | Sistema gestor de cursos </title>

  <!-- Favicon -->
  <link href="<?= URL_PATH ?>/assets/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


  <!-- Libraries Stylesheet -->
  <link href="<?= URL_PATH ?>/assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= URL_PATH ?>/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= URL_PATH ?>/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS customized-->
  <link rel="stylesheet" href="<?= URL_PATH ?>/assets/css/style.css">

  <script>
    // Creamos la raíz de la ruta
    const URL_PATH = <?= URL_PATH ?>;
  </script>

</head>

<body>

  <?php
  // Insertamos la barra del tope
  require_once(__DIR__ . '/../includes/top.view.php');
 
  // Insertamos el contenido de la web
  echo $content;

  // Insertamos el footer
  require_once(__DIR__ . '/../includes/footer.view.php');

  ?>

  <!-- Copyright Start -->
  <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy; <a href="#">Bit o no Bit</a>, odos los derechos reservados.
        </div>
        <div class="col-md-6 text-center text-md-end">
          Creado por <a href="#">Candy González</a>
          <br>Imágenes de: <a href="#" target="_blank">Unplash</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= URL_PATH ?>/assets/lib/wow/wow.min.js"></script>
  <script src="<?= URL_PATH ?>/assets/lib/easing/easing.min.js"></script>
  <script src="<?= URL_PATH ?>/assets/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= URL_PATH ?>/assets/lib/owlcarousel/owl.carousel.min.js"></script>


  <!-- Template Javascript -->
  <script src="<?= URL_PATH ?>/assets/js/main.js"></script>
</body>

</html>