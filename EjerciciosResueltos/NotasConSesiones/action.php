<?php
session_start();
if(empty($_SESSION["Alumnos"])){

    $alumnos = array();
    $_SESSION["Alumnos"]=$alumnos;


}
else{
    $alumnos = $_SESSION["Alumnos"];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Notas con objetos y sesiones</title>
</head>
<body>
    <form action="action.php" method="POST">

        <label for="nombre">Introducir nombre:</label>
        <input type="text" required name="nombre" id="nombre">
        <br>
        <label for="apellido">Introducir apellido: </label>
        <input type="text" required name="apellido" id="apellido">
        <br>
        <label for="Nota1">Introducir Nota1: </label>
        <input type="number" required name="Nota1" id="Nota1">
        <br>
        <label for="Nota2">Introducir Nota2: </label>
        <input type="number" required name="Nota2" id="Nota2">
        <br>
        <label for="Nota3">Introducir Nota3: </label>
        <input type="number" required name="Nota3" id="Nota3">
        <br>
        <label for="Nota4">Introducir nota prueba objetiva: </label>
        <input type="number" required name="Nota4" id="Nota4">
        <br>
        <label for="Nota5">Introducir nota prueba práctica: </label>
        <input type="number" required name="Nota5" id="Nota5">
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
    </form>
    <?php 

class Alumno{
    public $nombre;
    public $apellido;
    public $nota1;
    public $nota2;
    public $nota3;
    public $pruebaob;
    public $pruebapra;
    public $Notafinal;

    public function __construct($nombre, $apellido, $nota1, $nota2, $nota3, $pruebaob, $pruebapra){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->pruebaob = $pruebaob;
        $this->pruebapra = $pruebapra;
    }

    public function CalcularNotas(){
        $media = (($this->nota1+ $this->nota2+ $this->nota3)/3)*0.3;
        $pruebaob = ($this->pruebaob) *0.2;
        $pruebapra = ($this->pruebapra)* 0.8;
        $pruebafinal = ($pruebaob + $pruebapra) * 0.7;
        $this->Notafinal = $pruebafinal+$media;
    }
}

if(isset($_POST["nombre"]) || isset($_POST["apellido"]) || isset($_POST["Nota1"]) ||  isset($_POST["Nota2"]) || isset($_POST["Nota3"])|| isset($_POST["Nota4"])|| isset($_POST["Nota5"])){
    $alumno = new Alumno($_POST["nombre"], $_POST["apellido"], $_POST["Nota1"], $_POST["Nota2"], $_POST["Nota3"], $_POST["Nota4"], $_POST["Nota5"]);
    $alumno->CalcularNotas();
    array_push($alumnos, $alumno);
    $_SESSION["Alumnos"]=$alumnos;
    print('<div class="divtabla">');
    print('<table id="tabla"> <tr> <th>Nombre</th> <th> Apellido</th> <th> Nota1 </th> <th> Nota2</th> <th> Nota3 </th> <th> Nota4 </th> <th> Nota5 </th> <th> Nota final  </tr>');
    
       foreach($alumnos as $alumno){
           print("<tr> <td> $alumno->nombre </td> <td> $alumno->apellido </td> <td> $alumno->nota1 </td> <td> $alumno->nota2 </td> <td> $alumno->nota3 </td> <td> $alumno->pruebaob </td> <td> $alumno->pruebapra </td> <td> $alumno->Notafinal");
       }
       print("</div>");
   print("</table>");
}
else{

    print("Tienes que introducir datos en el formulario");
}
    

    

 
?>
</body>
</html>



