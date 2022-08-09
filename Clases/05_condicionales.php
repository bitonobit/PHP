<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clases de PHP</title>
    <meta name="description" content="Página de ejemplo">
    <meta name="keywords" content="HTML5, CSS3, Javascript, PHP">
    <meta name="author" content="Candy González">
    <!-- Librería Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Mi propio estilo -->
    <link rel="stylesheet" href="css/estilo.css">
    <!-- Fuentes de google -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat" rel="stylesheet">
    <!-- Mi Js -->
    <script src="js/libreria.js"></script>  
</head>
<body>  
	<div class="container">
	<h1>Sintaxis del lenguaje</h1><hr>
	<h2>Estructuras de control de flujo</h2>
	<hr>
    
	<!--
    ==================================================================
                        ESTRUCTURAS DE CONTROL CONDICIONALES
    =================================================================== -->
    <h3>Condicional: si</h3>
    <?php
        $a=10; $b=5;
        // Si -> 
        if ($a > $b) {
        echo "a es mayor que b";
        }
    ?>
     <h3>Condicional: si -> sino</h3>
    <?php
        // Si -> sino ->
        $a=1; $b=5;
        if ($a > $b) {
        echo "a es mayor que b";
        } else {
        echo "a NO es mayor que b";
        }
    ?>
    <h3>Condicional: si -> sino si -> sino </h3>
    <?php
        // Si -> si -> sino ->
        $a=5; $b=5;
        if ($a > $b) {
            echo "$a es mayor que $b";
        } elseif ($a == $b) {
            echo "$a es igual que $b";
        } else {
            echo "$a es menor que $b";
        }
    ?>
    <h3>Operador ternario</h3>
    <?php $i=1; if ($i == 5): ?><p>A es igual a 5</p><hr><?php endif; ?>

    <?php
        $a=7;
        if ($a == 5):
            echo "a igual 5";
            echo "...";
        elseif ($a == 6):
            echo "a igual 6";
            echo "!!!";
        else:
            echo "a no es 5 ni 6";
        endif;
    ?>


    <?php
        //Switch
        $m="mes";
        $d=2;
        // var_dump($m, $d);
        switch ("m") {
        case "Enero":
            echo "01";
            break;
        case "Febrero": 
            echo "02";
            break;
        case "Marzo":
            echo "03";
            break;
        case "Abril": 
            echo "04";
            break;
        case "Mayo":
            echo "05";
            break;
        case "Junio": 
            echo "06";
            break;
        case "Julio":
            echo "07";
            break;
        case "Agosto": 
            echo "08";
            break;
        case "Septiembre":
            echo "09";
            break;
        case "Octubre": 
            echo "10";
            break;
        case "Noviembre":
            echo "11";
            break;
        case "Diciembre": 
            echo "12";
            break;
        }

        switch ($d) {
            case 1:
                echo "día es igual a 1";
                break;
            case 2:
                echo " día es igual a 2";
                break;
            case 3:
                echo "día es igual a 3";
                break;
            default:
                echo "No se que día es";
                
        }
    ?>

	</body>
</html>