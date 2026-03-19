<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food4You</title>
    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&family=Fredericka+the+Great&family=Oswald:wght@200..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Iconos de bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="grid-container fondo">
        <header id="header" class="header">
            <div class="container">
                <img class="logo" src="./img/logo.png" alt="Logo de food4you dos raviolis">
            </div>
            <div class="container">
                <h1 class="h1 oswald">FOOD4YOU</h1>
            </div>
            <div class="container">
                <p class="oswald text-end">EXPRESS DELIVERY</p>
                <p class="tel">1800 258 888</p>
            </div>
            <div class="container">
                <img class="movil" src="./img/movil.png" alt="Icono de un móvil">
            </div>
        </header>
        <main class="main">
            <nav class="nav">
                <a href="#">INICIO</a>
                <a href="#">MENU</a>
                <a href="#">NOSOTROS</a>
                <a href="#">CONTACTO</a>
            </nav>
            <section class="cover">
                <div class="container text-center">
                    <p id="que-quieres">¿Qué quieres?</p>
                    <p id="no-esperes">No Esperes!</p>
                    <p id="ordena">Ordena ya tu pedido!</p>
                    <hr id="hr">
                    <div class="oferta">
                        <p id="happy">ESTE LUNES <br> HAPPY HOUR</p>
                        <p id="oferta"> 1+1=3</p>
                    </div>
                    <button class="btn-pide">Pide aquí</button>
                </div>
                <div class="container">
                    <img class="plato" src="./img/bn-img4.png" alt="Plato de pasta">
                </div>
            </section>
            <section class="elige">
                <h2 class="h2 text-center">
                    Elige y disfruta
                </h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quibusdam sit
                    culpa doloribus, eius consequuntur nobis incidunt corrupti repellat minus rerum aspernatur quidem
                    nam officia sunt. Expedita debitis possimus ea!</p>
                <div class="flex-container">
                    <div class="container">
                        <img class="platos" src="img/queso-brocoli.png" alt="macarrones-salteados-tomate-albahaca-sarten" 
                            width="75%">
                        <p class="text-center"><strong> Lorem ipsum</strong></p>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, optio
                            sed!
                            Alias dolorum, rem voluptatibus doloribus sed iste </p>
                        <button class="btn-ordena">Ordena ya!</button>
                    </div>
                    <div class="container">
                        <img class="platos" src="img/pizza.png" alt="Plato de pasta con salsa de tomate y queso">
                        <p class="text-center"><strong> Lorem ipsum</strong></p>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, optio
                            sed!
                            Alias dolorum, rem voluptatibus doloribus sed iste </p>
                        <button class="btn-ordena">Ordena ya!</button>
                    </div>
                    <div class="container">
                        <img class="platos" src="img/pasta-tomate-queso.png"
                            alt="Plato de apetitoso espagueti italiano clasico convsalsa de tomate, queso parmesano y albahaca">
                        <p class="text-center"><strong> Lorem ipsum</strong></p>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, optio
                            sed!
                            Alias dolorum, rem voluptatibus doloribus sed iste </p>
                        <button class="btn-ordena">Ordena ya!</button>
                    </div>
                </div>
            </section>
            <section class="descubre">
                <h2 class="text-center">Descubre</h2>
                <p class="h2 text-center">
                    Próximos eventos
                </p>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. In officiis, incidunt
                    voluptate earum optio modi corporis commodi temporibus, quod, dolor illo fugit deleniti consectetur
                    assumenda vero labore tempore velit mollitia?</p>
                <div class="carousel">
                    <img id="img-1" src="img/pizza3.jpg" alt="" width="30%">
                    <img id="img-2" src="img/pizza2.png" alt="" width="30%">
                    <img id="img-3" src="img/pizza5.jpg" alt="" width="30%">
                </div>
                <div class="flex-container">
                    <div class="container relative">
                        <img src="img/pasta-1.png" alt="">
                        <p class="sub-titulo-1">PRUEBA NUESTRA</p>
                        <div class="titulo-1">
                            <p>POPULAR</p>
                            <p>PASTA</p>
                        </div>
                    </div>
                    <div class="container ">
                        <div class="container relative">
                            <img src="img/pasta-2.png" alt="">
                            <p class="sub-titulo-2">PRUEBA NUESTRA</p>
                            <div class="titulo-2">
                                <p>EXQUISITA</p>
                                <p>LASAÑA</p>
                            </div>
                        </div>
                        <div class="container relative">
                            <img src="img/pasta-3.png" alt="">
                            <p class="sub-titulo-2">PRUEBA NUESTRA</p>
                            <div class="titulo-2">
                                <p>INGREDIENTES</p>
                                <p>FRESCOS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="formulario">
                <h2 class="text-center">Reservaciones</h2>
                <p class="text-center h2">
                    Reserva tu mesa
                </p>
                <div class="flex-container">
                    <form action="reserva.php" method="post" class="form">
                        <div class="col">
                            <input type="text" placeholder="Nombre" name="nombre" required>
                            <input type="date" placeholder="Fecha" name="fecha" required>
                            <input type="number" placeholder="Nº de personas" name="comensales" min="1" max="20" required>
                        </div>
                        <div class="col">
                            <input type="email" placeholder="Email" name="email" >
                            <input type="time" placeholder="12:00" min="12:00" max="23:00" name="hora" >
                            <input type="submit" value="Reserva" class="btn-ordena btn-reserva" name="reservar">
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <footer class="footer">
                <div class="footer-container">
                    <img class="logo" src="img/logo.png" alt=" Logo en color negro" >
                    <h2 class="h1 oswald">FOOD4YOU</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur doloremque perferendis,
                        et facilis praesentium reprehenderit voluptatum expedita. Sed, dolore? Dolorem maiores
                        eveniet fuga incidunt voluptatum laudantium nisi minima, ex vero!</p>
                    <p>creativeCommons</p>
                </div>
                <div class="">
                    <p><span> <i class="bi bi-pin-map-fill"></i> </span> Calle del Hambre, 2:30</p>
                    <p><span> <i class="bi bi-envelope-at-fill"></i></span> food4yoy@food.com</p>
                    <div class="redes">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>

        </footer>
    </div>
</body>

</html>