
<?php 
   require_once(__DIR__ . '/includes/nav.view.php');
?>
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Acerca de Nosotros</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="inicio">Inicio</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-primary active" aria-current="page">Acerca</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Page Header End -->
 <!-- About Start -->
 <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?= URL_PATH ?>/assets/img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="<?= URL_PATH ?>/assets/img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">Acerca de</h6>
                        <h1 class="display-6 mb-4">Haz del desarrollo web una pasión</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse explicabo perspiciatis harum, tempora fuga hic dolorem non ullam repellendus nam, quibusdam asperiores, maiores aliquid suscipit perferendis rerum autem ipsam nobis.</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam est at, necessitatibus beatae maxime exercitationem eaque eveniet ex in ratione voluptatum consequuntur animi sint fugit ducimus consequatur sunt eius vero.</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Certificados de Profesionalidad
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Nivel 3
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>A tu ritmo
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Apoyo audiovisual
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="">Repositorios de Codigo</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0123456789">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">+34 922 99 99 99</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->