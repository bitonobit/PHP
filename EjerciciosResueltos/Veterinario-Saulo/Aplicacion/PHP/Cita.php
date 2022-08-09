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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../Js/aplication.js"></script>
    <title>Mascotas S.A.</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img width="30%;" src="../img/logo.png" alt="Imagen del logo de la clinica">
            Mascotas S.A.</a>
            <h3 class="blanco">Bienvenido <?php $nombre = $_SESSION["nombre"]; print("$nombre");?></h3>
    </nav>
    <div class="container">
    <div id="margen" class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Coge Cita</h1>
                <div class="form-group">
                    <label for="agno">Introducir año numerico: </label>
                    <input type="number" name="agno" id="agno" class="form-control" id="agno" placeholder="Introducir Año">
                </div>
                <div class="form-group">
                    <label for="mes">Introducir mes numerico: </label>
                    <input type="number" name="mes" id="mes" class="form-control" id="mes" placeholder="Introducir Mes">
                </div>
                <span>Pular el boton para comprobar las disponibilidades horarias.</span>
                <button class="btn btn-primary" onclick="HacerCalendario(document.getElementById('agno').value,document.getElementById('mes').value )">Mostrar Calendario</button>
                <div id="calendario" class="container">

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 fechas" id=fechas></div>
            <div class="col-md-2"></div>
        </div>
    </div>
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
    
    if(isset($_POST["dia"]) && isset($_POST["mes"]) && isset($_POST["agno"])){

        $horas=["9:00","10:00", "10:30", "11:00", "11:30", "12:00", "12:30", "13:00", "13:30", "14:00", "14:30", "15:00", "15:30", "16:00", "16:30", "17:00", "17:30", "18:00", "18:30", "19:00", "19:30", "20:00", "20:30", "21:00"];
        $horasDisponibles= array();
        $fecha= $_POST["agno"]."/".$_POST["mes"]."/".$_POST["dia"];
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
        $consulta= "SELECT * FROM citas Where Fecha= '$fecha'";
        $resultado= mysqli_query($conexion, $consulta);
        
        while($fila=mysqli_fetch_row($resultado)){
        
            for($i=0; $i<sizeof($horas); $i++){

                if($fila[7]!=null){

                    if($fila[7]==$horas[$i]){

                         unset($horas[$i]);
                         $horas = array_values($horas);
                    }
                }
                
            }
        } 

        $_SESSION["fecha"]=$fecha;
        $_SESSION["horas"]=$horas;

        print ("<script>  window.location.href = '../../Aplicacion/PHP/Horas.php'; </Script>");

    }
    
    ?>
</body>

</html>