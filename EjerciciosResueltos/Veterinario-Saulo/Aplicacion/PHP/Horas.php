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
    <title>Mascotas S.A.</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="../"><img width="30%;" src="../img/logo.png" alt="Imagen del logo de la clinica">
            Mascotas S.A.</a>
            <h3 class="blanco">Bienvenido <?php $nombre = $_SESSION["nombre"]; print("$nombre");?></h3>
    </nav>

<h1>Horas disponibles:</h1>
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
    
        $horas = $_SESSION["horas"];

        print("<div class='container' id='horas'> <div class='row'>");

        for($i=0; $i<sizeof($horas); $i++){
            
            print("<form method='POST' action=''> <input type='hidden' name='hora' value='".$horas[$i]."'> <input type='submit' class='btn btn-primary' onclick='Hora(this.id)' id='".$horas[$i]."' class='col-md-1' value='".$horas[$i]."'> </form>");
        }
        print("</div></div>");

    if(isset($_POST["hora"])){

            $hora = $_POST["hora"];
            $fecha = $_SESSION["fecha"];

            $servidorBD = "localhost";  
            $usuarioBD = "root";                     
            $passwordBD = "";                             
            $nombreBD = "mascotas";  

            // Crear la conexión exclusivamente sin el nombre de la BD
        $conexion = mysqli_connect($servidorBD, $usuarioBD, $passwordBD);
    
        //Otra forma
        if (mysqli_connect_errno()){
            echo "Error de conexión con la Base de Datos";
            exit();
        }

        mysqli_select_db($conexion, $nombreBD) or die ("No se encuentra la basede datos");
        $consulta= "INSERT INTO citas(Fecha, Previsto, Idusuario, id_mascota, id_empleado, hora) VALUES ('$fecha','Cita online revision',1,4,2,'$hora')";
        print("$consulta");
        if (mysqli_query($conexion, $consulta)) {
            $recordatorio = "Se ha cogido tu cita correctamente. fecha: $fecha. A las $hora";
            $_SESSION["recordatorio"]=$recordatorio;
            echo "<script>  window.location.href='../PHP/Recordatorio.php';</script>";
        } else {
            print ("<h3 class='center'> Error con la base de datos pruebe mas tarde </h3>");
        }
    }
    
    ?>

    
</body>
</html>