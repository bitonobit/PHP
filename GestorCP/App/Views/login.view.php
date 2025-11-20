<?php 
   require_once(__DIR__ . '/includes/nav.view.php');
?>

<div id="AdminLogin" class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s" data-dbs-theme=dark>
    <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
        <a href="inicio"><button type="button" class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill" aria-label="Cerca"></button></a>
        <h1 class="text-body-emphasis">Sistema Gestor de Certificados Profesionales</h1>
        <p class="col-lg-6 mx-auto mb-4">
            Credenciales de acceso </p>
        <!-- formulario -->
        <div class="form-signin w-50 m-auto">
            <form action="<?= URL_PATH ?>/usuario/inicio" method="post">
                <img class="mb-4" src="<?= URL_PATH ?>/assets/img/logo.png" alt="" width="10%">
                <h1 class="h3 mb-3 fw-normal"> Por favor, identifícate </h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com" name="email">
                    <label for="floatingInput">
                        <span style="vertical-align: inherit;">
                            <span style="vertical-align: inherit;">Dirección de correo electrónico</span>
                        </span>
                    </label>
                    <br>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="pass">
                    <label for="floatingPassword">
                        <span style="vertical-align: inherit;">
                            <span style="vertical-align: inherit;">Contraseña</span>
                        </span>
                    </label>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <span style="vertical-align: inherit;">
                            <span style="vertical-align: inherit;">
                                Acuérdate de mí
                            </span>
                        </span>
                    </label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit" name="submit" >
                    <span style="vertical-align: inherit;">
                        <span style="vertical-align: inherit;">Iniciar sesión</span>
                    </span>
                </button>
                <p class="mt-5 mb-3 text-body-secondary">
                    <span style="vertical-align: inherit;">
                        <span style="vertical-align: inherit;">© 2023–2030</span>
                    </span>
                </p>
            </form>
        </div>
        <!-- fin formulario -->
    </div>
</div>
