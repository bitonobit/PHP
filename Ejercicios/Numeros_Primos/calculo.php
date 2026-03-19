<!DOCTYPE html>
<!--
 De una lista de 10 valores descompone en factores 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
		
            body{
                font-family: sans-serif;
                font-size: 10pt;
            }
            .j1{
                color: blue;
                font-weight: bolder;
            }
            .j2{
                color: red;
                font-weight: bolder;
            }
        </style>
    </head>
    <body>
        <?php
		// echo phpinfo();
            $cont = 0;		// Contador de factores del número
            $i = 0;
            $n = isset($_GET["num"])?$_GET["num"]:1;		//Determina si una variable está definida y no es NULL
            echo "El Número dado es: $n<br/>";
            echo "Multiplos: ";
            for($i=1;$i<= $n; $i++){						//Bucle que va a dividir el número
                $r = $n%$i;									//Asigna el resto a la variable r
                if($r == 0 && $i!=$n){						//$a && $b	And (y)	TRUE si tanto $a como $b son TRUE (si la división es exacta)
                    echo $v = ($i == 1)?"":", ";			//La expresión (expr1) ? (expr2) : (expr3) evalúa a expr2 si expr1 es TRUE y a expr3 si expr1 es FALSE. 
                    echo "$i";
                    $cont++;
                }elseif($i==$n){
                    $cont++;
                    $i2 = ($cont == 1)?$i:" y $i";			
                    echo "$i2.<br/>";
                }
            }
                echo "Numero de multiplos: $cont<br/>";
                echo "$n es número primo? ".$v = ($cont <= 2 && $cont > 0)?
                                            "<span class='j1'>Si</span>":
                                            "<span class='j2'>No</span>";
        ?>
         <br/>
            <a href="javascript:history.go(-1)">Volver</a>
    </body>
</html>