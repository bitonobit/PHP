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
        <div id="margen" class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Registrate</h1>
                <form class="form" action="" method="POST">
                <div class="form-group">
                    <label for="usuario">Usuario: </label>
                    <input type="text" required minlength="8" name="usuario" class="form-control" id="usuario" placeholder="Introducir usuario">
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña: </label>
                    <input type="password" required minlength="8" name="pass" class="form-control" id="pass" placeholder="Introducir contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <span>Si ya estas registrado, pulsa  <a href="Login.php">Aqui para logearte</a></span>
                </form>
            </div>
            <div class="col-md-3"></div>
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

<?php
        if(isset($_POST["usuario"]) && isset($_POST["pass"])){

        $usuario = strtolower($_POST["usuario"]);
        $contra = strtolower($_POST["pass"]);
        $servidorBD = "localhost";  
        $usuarioBD = "root";                     
        $passwordBD = "";                             
        $nombreBD = "mascotas";               
        $conexion = mysqli_connect($servidorBD, $usuarioBD, $passwordBD);
    
        if (mysqli_connect_errno()){
            print "Error de conexión con la Base de Datos";
            exit();
        }
        mysqli_select_db($conexion, $nombreBD) or die ("No se encuentra la basede datos");
        mysqli_set_charset($conexion, "utf8");	
        $consulta= "INSERT INTO `usuarios`(`Name`, `Password`) VALUES ('$usuario','$contra')";
        if (mysqli_query($conexion, $consulta)) {
            $_SESSION["nombre"]=$usuario;
            echo "<script>  window.location.href='../PHP/Datos.php';</script>";
        } else {
            print "<div class='row'><div class='col-md-4'></div> <div class='col-md-6'>Error:Ese nombre de usuario ya existe en la base de datos pruebe con otro</div><div class='col-md-2'></div></div>";
        }
    }

    ?>
</body>
</html>