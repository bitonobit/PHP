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

    </nav>

    <div class="container">
        <div id="margendatos" class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Datos del usuario: <?php $nombre = (string) $_SESSION["nombre"]; print("$nombre"); ?></h1>
                <form action="" method="POST">
                    <div class="form-group">
                <label for="numero">Numero de mascotas: </label>
                <select name="numero" id="numero">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">Mas de 3</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="usuario">Usuario: </label>
                    <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Introducir usuario">
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña: </label>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Introducir contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <span>Si quieres registrarte, pulsa <a href="Registro.php">Aqui.</a></span>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <footer>
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