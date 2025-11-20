<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="inicio" class="navbar-brand d-flex align-items-center  px-4 px-lg-5">
            <h2 class="m-0"><img src="<?= URL_PATH ?>/assets/img/logo.png" alt="" class="image-fluid me-2" style="max-width: 6.25vh;"> Bitonobit</h2>
        </a>
        <div class="w-25 m-auto">
            <h4 class="text-left">Bienvenido <?= $parameters['nombre'] ?? '' ?></h4> 
        </div>
        <a href="<?= URL_PATH ?>" class="btn btn-danger py-4 px-lg-5 d-none d-lg-block">Salir<i class="bi bi-arrow-right ms-3"></i></a>
</nav>
<!-- Navbar End -->
