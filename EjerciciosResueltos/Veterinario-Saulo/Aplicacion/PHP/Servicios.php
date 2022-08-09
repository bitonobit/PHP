<?php
    session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../Js/aplicacion.js"></script>
    <title>Mascotas S.A.</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="../"><img width="30%;" src="../img/logo.png" alt="Imagen del logo de la clinica">
            Mascotas S.A.</a>
            <h3 class="blanco">Bienvenido <?php $nombre = $_SESSION["nombre"]; print("$nombre");?></h3>
    </nav>

    <div class="container">
        <div class="row"><div class="col-md-4"></div><div class="col-md-4"><h1>Servicios</h1></div><div class="col-md-4"></div></div>
        <div class="row"><br><br><br></div>
        <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="../img/cita.jpg" class="card-img-top" alt="Imagen de un calendario, hace referencia a coger cita">
                <div class="card-body">
                    <h5 class="card-title">Coger cita</h5>
                    <p class="card-text">Este servicio sirve para coger cita online, rellena los datos y listo.</p>
                    <a href="Cita.php" class="btn btn-primary">Coger cita</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="../img/tienda.jpg" class="card-img-top" alt="Imagen de un calendario, hace referencia a coger cita">
                <div class="card-body">
                    <h5 class="card-title">Tienda de productos</h5>
                    <p class="card-text">Este servicio es para acceder a nuestra la tienda online </p>
                    <a href="#" class="btn btn-primary">Ir a la tienda</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="../img/conocenos.jpg" class="card-img-top" alt="Imagen de un calendario, hace referencia a coger cita">
                <div class="card-body">
                    <h5 class="card-title">Conocenos</h5>
                    <p class="card-text">Conoce a nuestros profesionales y las cualidades. Ademas de donde estamos.</p>
                    <a href="#" class="btn btn-primary">Conocenos</a>
                </div>
            </div>

        </div>
        </div>
    </div>

    <footer class="fijo">
        <p>Copyright 2019, Autor: Saulo De la santacruz Fernández</p>
        <p>Numeros de telefono: 922555555 ó 618888888 </p>
        <p>Calle Teobaldo power Nº2 puerta 4.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>


    